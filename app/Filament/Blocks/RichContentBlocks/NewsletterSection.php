<?php

namespace App\Filament\Blocks\RichContentBlocks;

use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class NewsletterSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
            'default' => 'Default',   
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
                    Tab::make('Sign Up Form')
                        ->schema([
                            // buttons
                            
            
                        ]),
                    
                ]),



        ];
    }
}
