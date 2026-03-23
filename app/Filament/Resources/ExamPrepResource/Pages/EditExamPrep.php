<?php

namespace App\Filament\Resources\ExamPrepResource\Pages;

use App\Filament\Resources\ExamPrepResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamPrep extends EditRecord
{
    protected static string $resource = ExamPrepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
