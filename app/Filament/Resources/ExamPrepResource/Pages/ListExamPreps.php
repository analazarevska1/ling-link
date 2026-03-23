<?php

namespace App\Filament\Resources\ExamPrepResource\Pages;

use App\Filament\Resources\ExamPrepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamPreps extends ListRecords
{
    protected static string $resource = ExamPrepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
