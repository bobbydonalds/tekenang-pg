<?php

namespace App\Filament\Resources\Sosmeds\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SosmedForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('tipe_sosmed')
                    ->options(['instagram' => 'Instagram', 'whatsapp' => 'Whatsapp'])
                    ->required(),
                Textarea::make('link_sosmed')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
