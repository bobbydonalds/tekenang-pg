<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori_gambar')
                    ->required(),
                Textarea::make('deskripsi_gambar')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('link_gambar')
                    ->image()
                    ->directory('galleries')
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                        '16:9',
                        '4:3',
                        '3:4',
                        '5:4',
                        '4:5',
                        '2:3',
                        '3:2',
                        '1:1',
                    ])
                    ->required(),
            ]);
    }
}
