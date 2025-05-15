<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
// kugleland/laravel-content-blocks
use Kugleland\LaravelContentBlocks\Filament\BlockGroups\Properties;
use Kugleland\LaravelContentBlocks\Filament\BlockGroups\RichContent;

class PageResource extends Resource
{
    use Translatable;
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        #dd($form->getLivewire()->getActiveLocale);

        return $form
            ->schema([
                ...Properties::make($form),
                MarkdownEditor::make('intro')->nullable(),
                Forms\Components\Actions::make([
                        Forms\Components\Actions\Action::make('Translate intro')
                        ->action(function (Forms\Get $get, Forms\Set $set, $livewire) {
                            $language = $livewire->activeLocale == 'en' ? 'english' : 'danish';
                            $oppositeLocale = $livewire->activeLocale == 'en' ? 'da' : 'en';
                            $page = Page::find($get('id'));
                            $translation = $page->translateText($page->getTranslation('intro', $oppositeLocale), $language);
                            $set('intro', $translation);
                        }),
                    ]),
                //TextInput::make('description')->nullable(),
                RichContent::builder($form)->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'da'];
    }
}
