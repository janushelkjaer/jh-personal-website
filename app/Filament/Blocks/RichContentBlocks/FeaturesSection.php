<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class FeaturesSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
                        'phone-mockup' => 'Phone mockup',
                        'product-screenshot' => 'Product screenshot',
                        'product-screenshot-on-left' => 'Product screenshot on left',
                        'large-screenshot' => 'Large screenshot',
                        'large-screenshot-on-dark' => 'Large screenshot on dark background',
                        'large-screenshot-with-border' => 'Large screenshot with border',
                        'large-screenshot-with-border-on-dark' => 'Large screenshot with border on dark background',

                        //
                        'three-column-small-icons' => 'Three column small icons',
                        'three-column-small-icons-on-dark' => 'Three column small icons on dark background',
                        'three-column-large-icons' => 'Three column large icons',
                        'three-column-large-icons-on-dark' => 'Three column large icons on dark background',

                        //
                        'contained-in-panel' => 'Contained in panel',
                        'product-screenshot-panel' => 'Product screenshot panel',
                        'product-screenshot-panel-testimonial' => 'Product screenshot panel testimonial',

                        'offset-2x2-grid' => 'Offset 2x2 grid',

                        'code-example-panel' => 'Code example panel',

                        'offset-with-feature-list' => 'Offset with a feature list',

                        'simple' => 'Simple',

                        'centered-2x2-grid' => 'Centered 2x2 grid',

                        'simple-3x2-grid-on-dark' => 'Simple 3x2 grid on dark',

                    ];
                    
                    asort($styleOptions);
        
        return [

            Tabs::make('Tabs')
                ->tabs([
                    Tab::make('General')
                        ->schema([
                            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
                        Forms\Components\Select::make('style')->options($styleOptions),
                     FileUpload::make('mockup_image')->image(),
                        Forms\Components\TextInput::make('pre_title'),
                        Forms\Components\TextInput::make('title'),
                        Forms\Components\RichEditor::make('content'),
                        ]),
                    Tab::make('Buttons')
                        ->schema([
                            // buttons
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
                                    Tab::make('Testimonial')
                                        ->schema([
                                        // testimonial
                            FileUpload::make('testimonial_image')->image(),
                            Forms\Components\TextInput::make('testimonial_name'),
                            Forms\Components\TextInput::make('testimonial_title'),
                            Forms\Components\TextInput::make('testimonial_quote'),
            
                        ]),
                    Tab::make('Features')
                        ->schema([
                            Forms\Components\Repeater::make('features')->schema([
                            Forms\Components\TextInput::make('title'),
                            Forms\Components\TextInput::make('description'),
                            Forms\Components\Select::make('icon')->options(self::$icons),
                            FileUpload::make('image')->image(),
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

                        ])->columns(3),
                        ]),

                        Tab::make('Code')
                        ->schema([
                            Forms\Components\TextArea::make('code_example'),
                        ]),
                ]),



        ];
    }
}
