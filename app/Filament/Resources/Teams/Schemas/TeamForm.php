<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_anggota')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                FileUpload::make('foto_profil')
                    ->image()
                    ->directory('team-photos')
                    ->columnSpanFull()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '9:16',
                        '3:4',
                        '4:5',
                        '2:3',
                        '1:1',
                    ])
                    ->downloadable(true)
                    ->visibility('public'),
            ]);
    }
}
