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
        return [

            // need to display mood, rooms, products, app screenshot, book cover, podcast cover, album cover, artwork, etc
            Forms\Components\Select::make('style')->options([
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
                'app-screenshot-on-light' => 'With app screenshot on light',
                'app-screenshot-on-dark' => 'With app screenshot on dark',

                //
                'phone-mockup' => 'Phone mockup on light',
                // 'with-phone-mockup-on-dark' => 'With phone mockup on dark',
                //
                'split-with-image-on-light' => 'Split with image on light',
                'split-with-image-on-dark' => 'Split with image on dark',
                'with-angled-image-on-right-on-light' => 'With angled image on right on light',
                'with-angled-image-on-right-on-dark' => 'With angled image on right on dark',
                'with-image-tiles-on-light' => 'With image tiles on light',
                'with-image-tiles-on-dark' => 'With image tiles on dark',

                'with-offset-image-on-light' => 'With offset image on light',
                'with-offset-image-on-dark' => 'With offset image on dark',

                // book cover
                'book-cover-on-right' => 'Book cover on right',
                'book-cover-on-left' => 'Book cover on left',



            ]),
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
