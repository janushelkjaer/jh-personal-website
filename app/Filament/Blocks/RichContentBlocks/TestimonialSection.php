<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class TestimonialSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
        'default' => 'Default',   
        'simple-centered' => 'Simple Centered',
        'large-avatar' => 'Large Avatar',
        'overlapping-image' => 'Overlapping Image',
        'background-image' => 'Background Image',
        'side-by-side' => 'Side by Side',
        'side-by-side-on-dark' => 'Side by Side on Dark',
        'star-rating' => 'Star Rating',
        'grid' => 'Grid',
        'grid-off-white' => 'Grid Off White',
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
                    Tab::make('Testimonials')
                        ->schema([
                            Forms\Components\Repeater::make('testimonials')->schema([
                                Forms\Components\TextInput::make('name'),
                                Forms\Components\TextInput::make('description'),
                                #Forms\Components\TextInput::make('title'),
                                #Forms\Components\TextInput::make('company'),
                                Forms\Components\TextInput::make('quote'),
                                Forms\Components\FileUpload::make('image')->image(),
                                Forms\Components\FileUpload::make('logo')->image(),
                                Forms\Components\Select::make('rating')->options([
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                ]),
                            ])->columns(3),
            
                        ]),
                    
                ]),

        ];
    }
}
