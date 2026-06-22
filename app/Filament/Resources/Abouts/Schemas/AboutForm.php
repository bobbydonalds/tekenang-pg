<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('judul_tentang')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('deskripsi_tentang')
                    ->required()
                    ->columnSpanFull(),
                 FileUpload::make('gambar_1')
                    ->image()
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->required(),
                FileUpload::make('gambar_2')
                    ->image()
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public')
                    ->required(),
                FileUpload::make('gambar_3')
                    ->image()
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                        '4:3',
                        '1:1',
                    ])
                    ->visibility('public') ,
            ]);
    }
}
