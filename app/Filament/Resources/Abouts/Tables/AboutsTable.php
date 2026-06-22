<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_tentang')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                TextColumn::make('deskripsi_tentang')
                    ->searchable()
                    ->sortable()
                    ->limit(50),  
                TextColumn::make('link_video')
                    ->searchable()
                    ->sortable()
                    ->limit(10),  
                ImageColumn::make('gambar_1')
                    ->visibility('public'),
                ImageColumn::make('gambar_2')
                    ->visibility('public'),
                ImageColumn::make('gambar_3')
                    ->visibility('public'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
