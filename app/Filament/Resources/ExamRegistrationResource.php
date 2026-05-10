<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamRegistrationResource\Pages;
use App\Models\ExamRegistration;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ExamRegistrationResource extends Resource
{
    protected static ?string $model = ExamRegistration::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Пријави за испити';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Информации за испитот')
                    ->schema([
                        TextEntry::make('exam.title')
                            ->label('Испит'),
                        TextEntry::make('examDate.exam_date')
                            ->label('Термин')
                            ->formatStateUsing(fn ($state) => $state
                                ? Carbon::parse($state)->format('d.m.Y')
                                : 'По барање'),
                    ])->columns(2),

                Section::make('Информации за кандидатот')
                    ->schema([
                        TextEntry::make('full_name')
                            ->label('Име и презиме'),
                        TextEntry::make('email')
                            ->label('Е-пошта'),
                        TextEntry::make('phone')
                            ->label('Телефон'),
                        TextEntry::make('message')
                            ->label('Порака')
                            ->default('—')
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Мета')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Пријавено на')
                            ->dateTime('d.m.Y H:i'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                \pxlrbt\FilamentExcel\Actions\Tables\ExportAction::make(),
            ])
            ->columns([
                TextColumn::make('exam.title')
                    ->label('Испит')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('examDate.exam_date')
                    ->label('Термин')
                    ->date('d.m.Y')
                    ->sortable(),
                TextColumn::make('full_name')
                    ->label('Име')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Е-пошта')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Телефон'),
                TextColumn::make('message')
                    ->label('Порака')
                    ->limit(40)
                    ->tooltip(fn ($record) => $record->message),
                TextColumn::make('created_at')
                    ->label('Пријавено на')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('exam')
                    ->relationship('exam', 'title')
                    ->label('Испит'),

                SelectFilter::make('created_at')
                    ->label('Датум на пријава')
                    ->options([
                        'today'      => 'Денес',
                        'this_week'  => 'Оваа недела',
                        'this_month' => 'Овој месец',
                        'this_year'  => 'Оваа година',
                    ])
                    ->query(function (Builder $query, array $data) {
                        $value = $data['value'] ?? null;
                        if (!$value) return $query;

                        return $query
                            ->when($value === 'today',      fn (Builder $q) => $q->whereDate('created_at', Carbon::today()))
                            ->when($value === 'this_week',  fn (Builder $q) => $q->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]))
                            ->when($value === 'this_month', fn (Builder $q) => $q->whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year))
                            ->when($value === 'this_year',  fn (Builder $q) => $q->whereYear('created_at', Carbon::now()->year));
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    \pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamRegistrations::route('/'),
            'view'  => Pages\ViewExamRegistration::route('/{record}'),
        ];
    }
}