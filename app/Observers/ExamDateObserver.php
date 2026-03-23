<?php

namespace App\Observers;

use App\Models\ExamDate;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class ExamDateObserver
{
    public function created(ExamDate $examDate): void
    {
        // We only sync if it's active
        if ($examDate->is_active) {
            $event = new Event;

            // Build a nice title: "TestDaF (Писмен дел)"
            $examTitle = $examDate->exam->title ?? 'Испит';
            $type = $examDate->type ? " ({$examDate->type})" : '';
            
            $event->name = $examTitle . $type;
            $event->description = "Локација: " . ($examDate->location ?? 'N/A');
            
            // Google Calendar all-day events need the end date to be +1 day
            $date = Carbon::parse($examDate->exam_date);
            $event->startDate = $date;
            $event->endDate = $date->copy()->addDay();
            
            $event->save();
        }
    }

    /**
     * Handle the ExamDate "updated" event.
     */
    public function updated(ExamDate $examDate): void
    {
        //
    }

    /**
     * Handle the ExamDate "deleted" event.
     */
    public function deleted(ExamDate $examDate): void
    {
        //
    }

    /**
     * Handle the ExamDate "restored" event.
     */
    public function restored(ExamDate $examDate): void
    {
        //
    }

    /**
     * Handle the ExamDate "force deleted" event.
     */
    public function forceDeleted(ExamDate $examDate): void
    {
        //
    }
}
