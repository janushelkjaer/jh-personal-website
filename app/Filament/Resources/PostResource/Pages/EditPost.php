<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Post;
class EditPost extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
            Actions\Action::make('view_frontend')->url(fn (Post $record) => route('posts.show', $record->slug))->openUrlInNewTab(),
        ];
    }
}
