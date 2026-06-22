<?php

namespace App\Filament\Resources\Backgrounds\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BackgroundForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gambar_bg')
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
            ]);
    }
}
