<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class LogoSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
           'simple-with-heading' => 'Simple with Heading',
           'simple-with-heading-on-dark' => 'Simple with Heading on Dark',
           'simple-with-call-to-action' => 'Simple with Call to Action',
           'simple-with-call-to-action-on-dark' => 'Simple with Call to Action on Dark',
           'simple-with-heading-left-aligned' => 'Simple with Heading Left Aligned',
           'simple-with-heading-left-aligned-on-dark' => 'Simple with Heading Left Aligned on Dark',
           'split-with-logo-on-right' => 'Split with Logo on Right',
           'split-with-logo-on-right-on-dark' => 'Split with Logo on Right on Dark',
           'simple' => 'Simple',
           'simple-on-dark' => 'Simple on Dark',
           'grid' => 'Grid',
           'grid-on-dark' => 'Grid on Dark',
        ];

        asort($styleOptions);
        
        return [

            Tabs::make('Tabs')
                ->tabs([
                    Tab::make('General')
                        ->schema([
                        Forms\Components\Select::make('style')->options($styleOptions),
                        FileUpload::make('image')->image(),
                        Forms\Components\TextInput::make('pre_heading'),
                        Forms\Components\TextInput::make('heading'),
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
                        Forms\Components\TextInput::make('cta_text'),
                        Forms\Components\TextInput::make('cta_url'),
                        Forms\Components\TextInput::make('cta_label'),
                        // Forms\Components\Select::make('cta_style')->options([
                        //     'default' => 'Default',
                        //     'primary' => 'Primary',
                        //     'filled' => 'Filled',
                        //     'danger' => 'Danger',
                        //     'ghost' => 'Ghost',
                        //     'subtle' => 'Subtle',
                        // ]),
                    ]),
                    Tab::make('Logos')
                        ->schema([
                            Forms\Components\Repeater::make('logos')->schema([
                                Forms\Components\TextInput::make('name'),
                                Forms\Components\TextArea::make('description'),
                                Forms\Components\FileUpload::make('image')->image(),
                            ])->columns(3),
            
                        ]),
                    
                ]),

        ];
    }
}
