<?php

namespace App\Filament\Resources\PartiturResource\Pages;

use App\Filament\Resources\PartiturResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartiturs extends ListRecords
{
    protected static string $resource = PartiturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
