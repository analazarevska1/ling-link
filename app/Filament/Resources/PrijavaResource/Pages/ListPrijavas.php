<?php

namespace App\Filament\Resources\PrijavaResource\Pages;

use App\Filament\Resources\PrijavaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrijavas extends ListRecords
{
    protected static string $resource = PrijavaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
