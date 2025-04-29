<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
class FeaturesSection extends BaseBlock
{
    static function schema(Form $form)
    {
        return [

            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
            Forms\Components\Select::make('style')->options([
                'phone-mockup' => 'Phone mockup',



            ]),
            
            FileUpload::make('mockup_image')->image(),
            Forms\Components\TextInput::make('title'),
            Forms\Components\RichEditor::make('content'),
            Forms\Components\Repeater::make('buttons')->schema([
                Forms\Components\TextInput::make('label'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\Select::make('variant')->options([
                    'default' => 'Default',
                    'primary' => 'Primary',
                    'filled' => 'Filled',
                    'danger' => 'Danger',
                    'ghost' => 'Ghost',
                    'subtle' => 'Subtle',
                ]),
                Forms\Components\Select::make('icon')->options(self::$icons),
                Forms\Components\Select::make('icon_position')->options([
                    'left' => 'Left',
                    'right' => 'Right',
                ]),
            ]),
        ];
    }
}
