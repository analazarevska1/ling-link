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
    protected static ?string $model = Exam::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // PERFORMANCE BOOST: Eager load relationships to prevent N+1 queries
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
                        Forms\Components\TextInput::make('title')->required()->label('Наслов на испит'),
                        Forms\Components\TextInput::make('subtitle')->label('Поднаслов'),
                        Forms\Components\Textarea::make('description')->label('Краток опис')->columnSpanFull(),
                        
                        // The "Smart" Row for Stats
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\TextInput::make('duration')
                                    ->label('Времетраење')
                                    ->placeholder('пр. 3 часа')
                                    ->disabled(fn (Forms\Get $get) => $get('has_fast_registration')),
                                    
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

                        // Layout Selection Section
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
                                    ->visible(fn (Forms\Get $get) => $get('layout_type') === 'aptitude')
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                                    ->collapsible()
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\TextInput::make('where_recognized')->label('Признаен во:'),
                        Forms\Components\TextInput::make('what_for')->label('Наменет за:'),
                        Forms\Components\TextInput::make('official_site_url')->label('Линк до официјална страна'),
                        
                        // --- IMAGE FIX START ---
                        Forms\Components\Placeholder::make('image_preview')
                            ->label('Моментална слика')
                            ->content(function ($record) {
                                if ($record && $record->image) {
                                    return new \Illuminate\Support\HtmlString('<img src="' . $record->image . '" style="max-width: 100%; height: 150px; border-radius: 8px; object-fit: cover; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);">');
                                }
                                return 'Нема прикачено слика.';
                            })
                            ->hidden(fn ($record) => ! $record),

                        Forms\Components\FileUpload::make('image')
                            ->label(fn ($record) => $record ? 'Прикачи нова слика (остави празно за да ја задржиш старата)' : 'Насловна слика')
                            ->image()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->saveUploadedFileUsing(function ($file) {
                                $imageKit = app(\App\Services\ImageKitService::class);
                                return $imageKit->upload($file, null, '/exams');
                            })
                            ->dehydrated(fn ($state) => filled($state)),
                        // --- IMAGE FIX END ---
                            
                        Forms\Components\Toggle::make('is_active')->label('Активен')->default(true),
                        Forms\Components\Toggle::make('is_featured')->label('Истакни на почетна')->default(false),
                    ])->columns(2), 

                // STEP 2: Јазични нивоа
                Wizard\Step::make('Јазични нивоа')
                    ->icon('heroicon-m-academic-cap')
                    ->schema([
                        Repeater::make('levels') 
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('level')->label('Ниво')->required(),
                                Forms\Components\TextInput::make('name')->label('Целосно име'),
                                Forms\Components\Textarea::make('description')->label('Опис')->columnSpanFull(),
                                Repeater::make('can_do')
                                    ->label('Вештини')
                                    ->simple(Forms\Components\TextInput::make('competency')->required())
                                    ->columnSpanFull(),
                            ])
                            ->columns(2) 
                    ]),

                // ЧЕКОР 3: Структура
                Wizard\Step::make('Структура на испит')
                    ->icon('heroicon-m-squares-2x2')
                    ->schema([
                        Repeater::make('structureParts') 
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Дел (пр. Слушање)')
                                    ->required(),

                                Forms\Components\TextInput::make('duration')
                                    ->label('Времетраење на овој дел')
                                    ->placeholder('пр. 45 мин.'),

                                Forms\Components\ToggleButtons::make('icon')
                                    ->label('Икона')
                                    ->inline() 
                                    ->options([
                                        'reading' => 'Читање',
                                        'writing' => 'Пишување',
                                        'listening' => 'Слушање',
                                        'speaking' => 'Говорење',
                                    ])
                                    ->icons([
                                        'reading' => 'heroicon-o-book-open',
                                        'writing' => 'heroicon-o-pencil-square',
                                        'listening' => 'heroicon-o-speaker-wave', 
                                        'speaking' => 'heroicon-o-chat-bubble-left-right',
                                    ])
                                    ->required(),

                                Forms\Components\TextInput::make('order')
                                    ->label('Редослед')
                                    ->numeric()
                                    ->default(0),

                                Forms\Components\Textarea::make('description')
                                    ->label('Детали / Опис за овој дел')
                                    ->placeholder('Што точно се прави во овој дел од испитот?')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2)
                            ->addActionLabel('Додај дел во структура')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null),
                    ]),

                // STEP 4: Dates
                Wizard\Step::make('Термини')
                    ->icon('heroicon-m-calendar-days')
                    ->schema([
                        Repeater::make('examDates')
                            ->relationship()
                            ->hidden(fn (Forms\Get $get): bool => $get('is_on_demand') === true)
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
            'index' => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'edit' => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}