<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
class HeroSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $heroStyleOptions = [
                'default' => 'Default',
                'simple-centered' => 'Simple centered',
                'split-with-screenshot-on-light' => 'Split with screenshot on light',
                'split-with-screenshot-on-dark' => 'Split with screenshot on dark',
                'split-with-code-example' => 'Split with code example',

                //
                'simple-centered-with-background-image' => 'Simple centered with background image',
                //
                // 'split-with-image-on-light' => 'Split with image on light',
                // 'split-with-image-on-dark' => 'Split with image on dark',
                //--
                'app-screenshot-on-light' => 'App screenshot on light',
                'app-screenshot-on-dark' => 'App screenshot on dark',

                //
                'phone-mockup' => 'Phone mockup',
                // 'with-phone-mockup-on-dark' => 'With phone mockup on dark',
                //
                'split-with-image-on-light' => 'Split with image on light',
                'split-with-image-on-dark' => 'Split with image on dark',

                //
                'angled-image-on-right' => 'Angled image on right',
                //'angled-image-on-right-on-dark' => 'Angled image on right on dark',
                //
                'image-tiles' => 'Image tiles',
                //
                'offset-image' => 'Offset image',

                // book cover
                'book-cover' => 'Book cover',



            ];

        asort($heroStyleOptions);

        return [

            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
            Forms\Components\Select::make('style')->options($heroStyleOptions),
            Forms\Components\Select::make('background_pattern')->options([
                'none' => 'None',
            ]),
            Forms\Components\Select::make('background')->options([
                'black' => 'Black',
                'primary' => 'Primary',
                'secondary' => 'Secondary',
                'white' => 'White',
            ]),

            FileUpload::make('background_image')->image(),
            FileUpload::make('mockup_image')->image(),

            FileUpload::make('image_tiles')
            ->multiple()
            ->reorderable()
            ->panelLayout('grid'),

            Forms\Components\TextInput::make('hero_title'),
            Forms\Components\RichEditor::make('hero_content'),
            Forms\Components\TextArea::make('code_example'),
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
