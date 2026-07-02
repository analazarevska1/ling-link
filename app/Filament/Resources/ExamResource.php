<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamResource\Pages;
use App\Models\Exam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;

class ExamResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Испити';
    protected static ?string $navigationGroup = 'Содржина';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with(['examDates', 'levels', 'structureParts']);
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Wizard::make([

                // ЧЕКОР 1: Основни податоци
                Wizard\Step::make('Основни податоци')
                    ->icon('heroicon-m-document-text')
                    ->schema([
                        Section::make('🇲🇰 Македонска содржина')
                            ->description('Содржина на македонски јазик')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Наслов на испит (МК)')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('subtitle')
                                    ->label('Поднаслов (МК)')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('duration')
                                    ->label('Времетраење (МК) — пр. 3 часа')
                                    ->maxLength(255)
                                    ->disabled(fn(Forms\Get $get) => $get('has_fast_registration')),
                                Forms\Components\Textarea::make('description')
                                    ->label('Краток опис (МК)')
                                    ->columnSpanFull(),
                            ])->columns(2),

                        Section::make('🇬🇧 English Content')
                            ->description('Content in English language')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label('Title (EN)')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('subtitle_en')
                                    ->label('Subtitle (EN)')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('duration_en')
                                    ->label('Duration (EN) — e.g. 3 hours')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description_en')
                                    ->label('Short description (EN)')
                                    ->columnSpanFull(),
                            ])->columns(2),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('results_time')
                                    ->label('Објава на резултати')
                                    ->placeholder('пр. 4 недели'),

                                Forms\Components\Toggle::make('has_fast_registration')
                                    ->label('Брза пријава (Fast Reg)')
                                    ->helperText('Вклучи ако се пријавува пред самиот испит.')
                                    ->live()
                                    ->onColor('danger')
                                    ->inline(false),
                            ]),

                        Forms\Components\Toggle::make('is_on_demand')
                            ->label('Полагање по барање (On-Demand)')
                            ->helperText('Вклучете ако испитот нема фиксни датуми (пр. ONSET).')
                            ->live()
                            ->columnSpanFull(),

                        Section::make('Тип на приказ на страната')
                            ->description('Одберете како сакате да се прикажуваат информациите.')
                            ->schema([
                                Forms\Components\Select::make('layout_type')
                                    ->label('Дизајн')
                                    ->options([
                                        'standard' => 'Стандарден (само опис и структура)',
                                        'aptitude' => 'Проширен (со дополнителни инфо-блокови)',
                                    ])
                                    ->default('standard')
                                    ->live()
                                    ->required()
                                    ->native(false),

                                Repeater::make('info_cards')
                                    ->label('Дополнителни инфо-блокови (за Проширен приказ)')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')->label('Наслов')->required(),
                                        Repeater::make('items')
                                            ->label('Листа со информации')
                                            ->simple(Forms\Components\TextInput::make('text')->required())
                                    ])
                                    ->visible(fn(Forms\Get $get) => $get('layout_type') === 'aptitude')
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                                    ->collapsible()
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('where_recognized')->label('Признаен во (МКД):'),
                                Forms\Components\TextInput::make('where_recognized_en')->label('Recognized in (EN):'),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('what_for')->label('Наменет за (МКД):'),
                                Forms\Components\TextInput::make('what_for_en')->label('Intended for (EN):'),
                            ]),
                        Forms\Components\TextInput::make('official_site_url')->label('Линк до официјална страна'),

                        // Image preview (only shown when editing)
                        Forms\Components\Placeholder::make('image_preview')
                            ->label('Моментална слика')
                            ->content(function ($record) {
                                if ($record && $record->image) {
                                    return new \Illuminate\Support\HtmlString(
                                        '<img src="' . $record->image . '" style="max-width: 100%; height: 150px; border-radius: 8px; object-fit: cover; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">'
                                    );
                                }
                                return 'Нема прикачено слика.';
                            })
                            ->hidden(fn($record) => !$record),

                        // ImageKit upload
                        Forms\Components\FileUpload::make('image')
                            ->label(fn($record) => $record ? 'Прикачи нова слика (остави празно за да ја задржиш старата)' : 'Насловна слика')
                            ->image()
                            ->required(fn(string $operation): bool => $operation === 'create')
                            ->saveUploadedFileUsing(function ($file) {
                                $imageKit = app(\App\Services\ImageKitService::class);
                                return $imageKit->upload(
                                    $file,
                                    uniqid() . '.' . $file->getClientOriginalExtension(),
                                    '/exams'
                                );
                            })
                            ->dehydrated(fn($state) => filled($state)),

                        Forms\Components\Toggle::make('is_active')->label('Активен')->default(true),
                        Forms\Components\Toggle::make('is_featured')->label('Истакни на почетна')->default(false),
                    ])->columns(2),

                // ЧЕКОР 2: Јазични нивоа
                Wizard\Step::make('Јазични нивоа')
                    ->icon('heroicon-m-academic-cap')
                    ->schema([
                        Repeater::make('levels')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('level')->label('Ниво')->required()->columnSpanFull(),

                                Section::make('🇲🇰 Македонска содржина')
                                    ->schema([
                                        Forms\Components\TextInput::make('name')->label('Целосно име (МК)'),
                                        Forms\Components\Textarea::make('description')->label('Опис (МК)')->columnSpanFull(),
                                        Repeater::make('can_do')
                                            ->label('Вештини (МК)')
                                            ->simple(Forms\Components\TextInput::make('competency')->required())
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('🇬🇧 English Content')
                                    ->schema([
                                        Forms\Components\TextInput::make('name_en')->label('Full name (EN)'),
                                        Forms\Components\Textarea::make('description_en')->label('Description (EN)')->columnSpanFull(),
                                        Repeater::make('can_do_en')
                                            ->label('Skills (EN)')
                                            ->simple(Forms\Components\TextInput::make('competency')->required())
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ])
                            ->columns(1)
                    ]),

                // ЧЕКОР 3: Структура
                Wizard\Step::make('Структура на испит')
                    ->icon('heroicon-m-squares-2x2')
                    ->schema([
                        Repeater::make('structureParts')
                            ->relationship()
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\ToggleButtons::make('icon')
                                            ->label('Икона')
                                            ->inline()
                                            ->options([
                                                'reading'   => 'Читање',
                                                'writing'   => 'Пишување',
                                                'listening' => 'Слушање',
                                                'speaking'  => 'Говорење',
                                            ])
                                            ->icons([
                                                'reading'   => 'heroicon-o-book-open',
                                                'writing'   => 'heroicon-o-pencil-square',
                                                'listening' => 'heroicon-o-speaker-wave',
                                                'speaking'  => 'heroicon-o-chat-bubble-left-right',
                                            ])
                                            ->required(),

                                        Forms\Components\TextInput::make('order')
                                            ->label('Редослед')
                                            ->numeric()
                                            ->default(0),
                                    ]),

                                Section::make('🇲🇰 Македонска содржина')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Дел (МК, пр. Слушање)')
                                            ->required(),
                                        Forms\Components\TextInput::make('duration')
                                            ->label('Времетраење (МК, пр. 45 мин.)'),
                                        Forms\Components\Textarea::make('description')
                                            ->label('Опис за овој дел (МК)')
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('🇬🇧 English Content')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_en')
                                            ->label('Part name (EN, e.g. Listening)'),
                                        Forms\Components\TextInput::make('duration_en')
                                            ->label('Duration (EN, e.g. 45 min.)'),
                                        Forms\Components\Textarea::make('description_en')
                                            ->label('Description (EN)')
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ])
                            ->columns(1)
                            ->addActionLabel('Додај дел во структура')
                            ->collapsible()
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null),
                    ]),

                // ЧЕКОР 4: Термини
                Wizard\Step::make('Термини')
                    ->icon('heroicon-m-calendar-days')
                    ->schema([
                        Repeater::make('examDates')
                            ->relationship()
                            ->hidden(fn(Forms\Get $get): bool => $get('is_on_demand') === true)
                            ->schema([
                                Forms\Components\Grid::make(3)
                                    ->schema([
                                        Forms\Components\DatePicker::make('registration_start')->label('Почеток пријава')->native(false)->required(),
                                        Forms\Components\DatePicker::make('registration_deadline')->label('Краен рок')->native(false)->required(),
                                        Forms\Components\DatePicker::make('exam_date')->label('Датум на полагање')->native(false)->required(),
                                    ]),
                                Forms\Components\Toggle::make('is_active')->label('Отворен за пријава')->default(true),
                            ])
                            ->collapsible(),
                    ]),

            ])->columnSpanFull()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Испит')->searchable(),
                Tables\Columns\IconColumn::make('has_fast_registration')->label('Fast Reg')->boolean(),
                Tables\Columns\TextColumn::make('layout_type')->label('Приказ')->badge(),
                Tables\Columns\IconColumn::make('is_active')->label('Активен')->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index'  => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'edit'   => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}