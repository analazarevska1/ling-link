<?php

namespace App\Filament\Resources\PrijavaResource\Pages;

use App\Filament\Resources\PrijavaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrijava extends EditRecord
{
    protected static string $resource = PrijavaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
