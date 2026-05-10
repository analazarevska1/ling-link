<?php

namespace App\Observers;

use App\Models\ExamDate;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class ExamDateObserver
{
    public function created(ExamDate $examDate): void
    {
        $examDate->loadMissing('exam');

        $examTitle = $examDate->exam->title ?? 'Испит';
        $type = $examDate->type ? " ({$examDate->type})" : '';

        $event = new Event;
        $event->name = $examTitle . $type;
        $event->description = "Локација: " . ($examDate->location ?? 'N/A');

        $date = Carbon::parse($examDate->exam_date);
        $event->startDate = $date;
        $event->endDate = $date->copy()->addDay();

        $event->save();
    }

    public function updated(ExamDate $examDate): void
    {
        //
    }

    public function deleted(ExamDate $examDate): void
    {
        //
    }

    public function restored(ExamDate $examDate): void
    {
        //
    }

    public function forceDeleted(ExamDate $examDate): void
    {
        //
    }
}