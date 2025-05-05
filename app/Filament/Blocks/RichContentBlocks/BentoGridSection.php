<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class BentoGridSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
        'default' => 'Default',   
        'three-column' => 'Three column',
        'two-rows' => 'Two rows',
        'two-rows-on-dark' => 'Two rows on dark',
        ];

        asort($styleOptions);
        
        return [

            Tabs::make('Tabs')
                ->tabs([
                    Tab::make('General')
                        ->schema([
                            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
                        Forms\Components\Select::make('style')->options($styleOptions),
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
                    Tab::make('Cards')
                        ->schema([
                            Forms\Components\Repeater::make('cards')->schema([
                                FileUpload::make('image')->image(),
                                Forms\Components\TextInput::make('pre_heading'),
                                Forms\Components\TextInput::make('heading'),
                                Forms\Components\TextInput::make('text'),
                                //Forms\Components\Select::make('icon')->options(self::$icons),
                            ])->defaultItems(5)->addable(false)->deletable(false),
            
                        ]),
                ]),

        ];
    }
}
