<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class ContactSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
        'default' => 'Default',   
        'split-pattern' => 'Split pattern',
        // 'phone-mockup' => 'Phone mockup',
        // 'product-screenshot' => 'Product screenshot',
        // 'product-screenshot-on-left' => 'Product screenshot on left',


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
                        ]),
                    Tab::make('Form')
                        ->schema([
                            // buttons
                            
            
                        ]),
                    
                ]),



        ];
        // return [
        //     Forms\Components\Select::make('contact_background')->options([
        //         'black' => 'Black',
        //         'primary' => 'Primary',
        //         'secondary' => 'Secondary',
        //         'white' => 'White',
        //     ]),
        //     //SpatieMediaLibraryFileUpload::make('profile_image')->collection('profile'),
        //     Forms\Components\FileUpload::make('contact_image')->image(),
        //     Forms\Components\TextInput::make('contact_heading'),
        //     Forms\Components\TextInput::make('contact_subheading'),
        //     Forms\Components\MarkdownEditor::make('contact_content'),
        //     Forms\Components\Repeater::make('contact_buttons')->schema([
        //         Forms\Components\TextInput::make('label'),
        //         Forms\Components\TextInput::make('url'),
        //         Forms\Components\TextInput::make('variant'),
        //     ]),
        // ];
    }
}
