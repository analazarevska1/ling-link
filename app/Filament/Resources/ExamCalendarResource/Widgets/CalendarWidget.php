<?php

namespace App\Filament\Resources\ExamCalendarResource\Widgets;

use App\Models\ExamDate;
use App\Models\Exam;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;

class CalendarWidget extends FullCalendarWidget
{
    public Model | string | null $model = ExamDate::class;

    /**
     * This pulls your dates into the calendar view
     */
    public function fetchEvents(array $fetchInfo): array
    {
        return ExamDate::query()
            ->with('exam')
            ->where('exam_date', '>=', $fetchInfo['start'])
            ->where('exam_date', '<=', $fetchInfo['end'])
            ->get()
            ->map(function (ExamDate $date) {
                return [
                    'id'    => $date->id,
                    'title' => ($date->exam->title ?? 'Испит') . ($date->type ? " - {$date->type}" : ""),
                    'start' => $date->exam_date,
                    'allDay' => true,
                    'color' => '#3b82f6', 
                ];
            })
            ->toArray();
    }

    /**
     * This allows the "Click to Add" functionality (CREATE)
     */
    protected function headerActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Нов термин')
                ->model(ExamDate::class)
                ->mountUsing(function (Forms\Form $form, array $arguments) {
                    $form->fill([
                        'exam_date' => $arguments['start'] ?? null,
                    ]);
                })
                ->form($this->getSharedFormSchema()),
        ];
    }

    /**
     * This allows the "Click to Edit" functionality (EDIT & DELETE)
     */
    protected function modalActions(): array
    {
        return [
            \Filament\Actions\EditAction::make()
                ->label('Уреди термин')
                ->form($this->getSharedFormSchema()),
                
            \Filament\Actions\DeleteAction::make()
                ->label('Избриши термин'),
        ];
    }

    /**
     * We keep the form schema here so we don't have to write it twice!
     */
    protected function getSharedFormSchema(): array
    {
        return [
            Forms\Components\Select::make('exam_id')
                ->label('Испит')
                ->options(\App\Models\Exam::all()->pluck('title', 'id'))
                ->required()
                ->columnSpanFull(),
                
            Forms\Components\TextInput::make('type')
                ->label('Тип')
                ->columnSpanFull(),

            Forms\Components\Grid::make(3)
                ->schema([
                    Forms\Components\DatePicker::make('registration_start')
                        ->label('Почеток на пријава')
                        ->native(false)
                        ->required(),

                    Forms\Components\DatePicker::make('registration_deadline')
                        ->label('Краен рок')
                        ->native(false)
                        ->required(),

                    Forms\Components\DatePicker::make('exam_date')
                        ->label('Датум на испит')
                        ->native(false)
                        ->required(),
                ]),
        ];
    }
}