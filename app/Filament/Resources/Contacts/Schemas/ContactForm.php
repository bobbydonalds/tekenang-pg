<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('nomor_telepon')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('link_wa')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('alamat_email')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
