<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class FaqSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
           'default' => 'Default',
           'offset-with-supporting-text' => 'Offset with supporting text',
           'centered-accordian' => 'Centered accordian',
           'centered-accordian-on-dark' => 'Centered accordian on dark',
           'side-by-side' => 'Side by side',
           'three-columns' => 'Three columns',
           'three-columns-on-dark' => 'Three columns on dark',
           'three-columns-with-centered-intro' => 'Three columns with centered intro',
           'two-columns' => 'Two columns',
           'two-columns-on-dark' => 'Two columns on dark',
           'two-columns-with-centered-intro' => 'Two columns with centered intro',
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
                        ]),
                    Tab::make('FAQ Items')
                        ->schema([
                            Forms\Components\Repeater::make('faq_items')->schema([
                                Forms\Components\TextInput::make('question'),
                                Forms\Components\TextArea::make('answer'),
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
                                ]),
                            ])->columns(3),
            
                        ]),
                    
                ]),

        ];
    }
}
