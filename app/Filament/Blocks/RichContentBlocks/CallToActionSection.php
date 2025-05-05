<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class CallToActionSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
        'default' => 'Default',   
        'dark-panel-with-app-screenshot' => 'Dark panel with app screenshot',
        'simple-stacked' => 'Simple stacked',
        'centered-on-dark-panel' => 'Centered on dark panel',
        'simple-centered' => 'Simple centered',
        'simple-centered-on-dark' => 'Simple centered on dark',
        'simple-centered-on-brand' => 'Simple centered on brand',
        'simple-justified' => 'Simple justified',
        'simple-justified-on-light-brand' => 'Simple justified on light brand',
        'split-with-image' => 'Split with image',
        'two-columns-with-photo-on-dark' => 'Two columns with photo on dark',
        'image-tiles' =>'Image tiles'

        ];

        asort($styleOptions);
        
        return [

            Tabs::make('Tabs')
                ->tabs([
                    Tab::make('General')
                        ->schema([
                            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
                        Forms\Components\Select::make('style')->options($styleOptions),
                        FileUpload::make('image')->image(),
                        Forms\Components\TextInput::make('pre_title'),
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
                        ]),
                    Tab::make('Key Points')
                        ->schema([
                            Forms\Components\Repeater::make('key_points')->schema([
                                Forms\Components\TextInput::make('title'),
                                // Forms\Components\TextInput::make('description'),
                               // Forms\Components\Select::make('icon')->options(self::$icons),
                            ]),
            
                        ]),
                    Tab::make('Image Tiles')
                        ->schema([
                            Forms\Components\Repeater::make('image_tiles')->schema([
                                FileUpload::make('image')->image(),
                                Forms\Components\TextInput::make('title'),
                                Forms\Components\TextInput::make('description'),
                            ]),
            
                        ]),
                ]),

        ];
    }
}
