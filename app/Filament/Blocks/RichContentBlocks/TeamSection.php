<?php

namespace App\Filament\Blocks\RichContentBlocks;
use App\Filament\Blocks\BaseBlock;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class TeamSection extends BaseBlock
{
    static function schema(Form $form)
    {
        $styleOptions = [
           'default' => 'Default',
           'small-images' => 'Small Images',
           'large-images' => 'Large Images',
           'large-images-on-dark' => 'Large Images on Dark',
           'grid-with-round-images' => 'Grid with Round Images',
           'image-and-description' => 'Image and Description',
           'image-and-description-vertical' => 'Image and Description Vertical',
           'full-width-with-vertical-images' => 'Full Width with Vertical Images',
           'grid-with-large-round-images' => 'Grid with Large Round Images',
           'grid-with-medium-images-on-dark' => 'Grid with Medium Images on Dark',
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
                    Tab::make('Team Members')
                        ->schema([
                            Forms\Components\Repeater::make('team_members')->schema([
                                Forms\Components\TextInput::make('name'),
                                Forms\Components\TextInput::make('title'),
                                Forms\Components\TextArea::make('description'),
                                Forms\Components\FileUpload::make('image')->image(),
                                Forms\Components\Repeater::make('social_links')->schema([
                                    Forms\Components\TextInput::make('label'),
                                    Forms\Components\TextInput::make('url'),
                                    Forms\Components\Select::make('platform')->options([
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter',
                                        'instagram' => 'Instagram',
                                        'linkedin' => 'LinkedIn',
                                    ]),
                                ]),
                            ])->columns(3),
            
                        ]),
                    
                ]),

        ];
    }
}
