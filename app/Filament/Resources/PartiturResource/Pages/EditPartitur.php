<?php

namespace App\Filament\Resources\PartiturResource\Pages;

use App\Filament\Resources\PartiturResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartitur extends EditRecord
{
    protected static string $resource = PartiturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
