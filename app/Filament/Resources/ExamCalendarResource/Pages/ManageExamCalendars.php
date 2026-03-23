<?php

namespace App\Filament\Resources\ExamCalendarResource\Pages;

use App\Filament\Resources\ExamCalendarResource;
use App\Filament\Resources\ExamCalendarResource\Widgets\CalendarWidget;
use Filament\Resources\Pages\ManageRecords;

class ManageExamCalendars extends ManageRecords
{
    protected static string $resource = ExamCalendarResource::class;

    // This is the "magic" that puts the calendar on the page!
    protected function getHeaderWidgets(): array
    {
        return [
            CalendarWidget::class,
        ];
    }

    // This makes the calendar take up the whole width
    public function getHeaderWidgetsColumns(): int | array
    {
        return 1;
    }
}