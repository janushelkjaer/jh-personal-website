<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\BlockGroups\Properties;
use App\Filament\BlockGroups\RichContent;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\LinkColumn;
class PostResource extends Resource
{
    use Translatable;

    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ...Properties::make($form),
                Forms\Components\Textarea::make('intro')
                    ->label('Intro')
                    ->columnSpanFull(),

                Forms\Components\DatePicker::make('published_at')
                    ->label('Published At')
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->columnSpanFull(),

                    Forms\Components\Actions::make([
                        Forms\Components\Actions\Action::make('Generate excerpt')
                        ->action(function (Forms\Get $get, Forms\Set $set) {
                            $set('excerpt', str($get('intro'))->words(45, end: ''));
                        }),
                    ]),

                Forms\Components\Textarea::make('summary')
                    ->label('Summary')
                    ->columnSpanFull(),

                Repeater::make('key_takeaways')
                        ->schema([
                            TextInput::make('heading')->required(),
                            TextInput::make('text')->required(),
                        ])
                        ->columns(2)
                        ->columnSpanFull(),

                Repeater::make('what_you_will_learn')
                        ->schema([
                            TextInput::make('heading')->required(),
                            TextInput::make('text')->required(),
                        ])
                        ->columns(2)
                        ->columnSpanFull(),

                // Forms\Components\MarkDownEditor::make('content')
                //     ->label('Content')
                //     ->columnSpanFull(),
                RichContent::builder($form)->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('featured_image')->collection('posts'),
                // Forms\Components\TextInput::make('excerpt')
                //     ->label('Excerpt')
                //     ->maxLength(255),

                Forms\Components\Textarea::make('imagery_suggestions')
                    ->label('Imagery Suggestions')
                    ->columnSpanFull(),

                Forms\Components\MarkdownEditor::make('references')
                    ->label('References')
                    ->columnSpanFull(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                #Tables\Actions\Action::make('view_frontend')->url(fn (Post $record) => route('posts.show', $record->slug))->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\CategoriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'da'];
    }
}
