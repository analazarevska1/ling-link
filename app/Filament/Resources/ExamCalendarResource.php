<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamCalendarResource\Pages;
use App\Filament\Resources\ExamCalendarResource\RelationManagers;
use App\Models\ExamCalendar;
use App\Models\ExamDate;
use App\Filament\Resources\ExamCalendarResource\Widgets\CalendarWidget;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamCalendarResource extends Resource
{
    protected static ?string $model = ExamDate::class;

    // ADD THIS LINE TO HIDE FROM MENU
    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Exam Calendar';

    public static function getWidgets(): array
    {
        return [
            CalendarWidget::class,
        ];
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageExamCalendars::route('/'),
        ];
    }
}