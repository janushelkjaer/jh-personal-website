<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class StatsSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
        'default' => 'Default',   
        'simple' => 'Simple',
        'simple-on-dark' => 'Simple on dark',
        'simple-grid' => 'Simple grid',
        'simple-grid-on-dark' => 'Simple grid on dark',
        'background-image' => 'Background image',
        'split-with-image' => 'Split with image',
        'timeline' => 'Timeline',
        'stepped' => 'Stepped',
        'two-column-description-on-dark' => 'Two column description on dark',
        'split-with-description' => 'Split with description',
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
                    Tab::make('Stats')
                        ->schema([
                            Forms\Components\Repeater::make('stats')->schema([
                                Forms\Components\TextInput::make('title'),
                                Forms\Components\TextInput::make('value'),
                                Forms\Components\TextInput::make('description'),
                                Forms\Components\Select::make('icon')->options(self::$icons),
                            ]),
            
                        ]),
                ]),

        ];
    }
}
