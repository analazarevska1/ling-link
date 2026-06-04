<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CourseResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Курсеви';
    protected static ?string $navigationGroup = 'Содржина';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Основни информации')
                    ->schema([
                        Forms\Components\Select::make('language')
                            ->required()
                            ->default('english')
                            ->options([
                                'english'    => 'English',
                                'german'     => 'German',
                                'macedonian' => 'Macedonian',
                            ])
                            ->live(),

                        Forms\Components\Select::make('category')
                            ->required()
                            ->live()
                            ->options(function (Forms\Get $get) {
                                $language = $get('language');
                                return match ($language) {
                                    'english' => [
                                        'children'    => 'Children',
                                        'adults'      => 'Adults',
                                        'specialized' => 'Specialized',
                                    ],
                                    'german' => [
                                        'children'    => 'Children',
                                        'regular'     => 'Regular',
                                        'specialized' => 'Specialized',
                                        'intensive'   => 'Intensive',
                                    ],
                                    'macedonian' => [
                                        'children'   => 'Children',
                                        'individual' => 'Individual',
                                    ],
                                    default => [
                                        'children'    => 'Children',
                                        'adults'      => 'Adults',
                                        'specialized' => 'Specialized',
                                    ],
                                };
                            })
                            ->placeholder('Select category'),

                        Forms\Components\Select::make('level')
                            ->options([
                                'A1-A2' => 'A1-A2',
                                'B1-B2' => 'B1-B2',
                                'C1-C2' => 'C1-C2',
                            ])
                            ->placeholder('Select level'),

                        Forms\Components\Select::make('age_group')
                            ->options(function (Forms\Get $get) {
                                $category = $get('category');
                                if ($category === 'children') {
                                    return [
                                        'до 12' => 'до 12',
                                        '13-17' => '13-17',
                                    ];
                                }
                                return [
                                    '18-25' => '18-25',
                                    '26-35' => '26-35',
                                    '40+'   => '40+',
                                ];
                            })
                            ->placeholder('Select age group'),

                        Forms\Components\TextInput::make('students_count')
                            ->maxLength(255),

                        Forms\Components\TextInput::make('hours')
                            ->numeric(),

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
                            ->hidden(fn ($record) => !$record)
                            ->columnSpanFull(),

                        // ImageKit upload
                        Forms\Components\FileUpload::make('image')
                            ->label(fn ($record) => $record ? 'Прикачи нова слика (остави празно за да ја задржиш старата)' : 'Насловна слика')
                            ->image()
                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->saveUploadedFileUsing(function ($file) {
                                $imageKit = app(\App\Services\ImageKitService::class);
                                return $imageKit->upload(
                                    $file,
                                    uniqid() . '.' . $file->getClientOriginalExtension(),
                                    '/courses'
                                );
                            })
                            ->dehydrated(fn ($state) => filled($state))
                            ->columnSpanFull(),



                    ])->columns(2),

                Forms\Components\Section::make('🇲🇰 Македонска содржина')
                    ->description('Содржина на македонски јазик')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Наслов (МК)')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subtitle')
                            ->label('Поднаслов (МК)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('duration')
                            ->label('Траење (МК) — пр. 32 недели')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Опис (МК)')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('🇬🇧 English Content')
                    ->description('Content in English language')
                    ->schema([
                        Forms\Components\TextInput::make('title_en')
                            ->label('Title (EN)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subtitle_en')
                            ->label('Subtitle (EN)')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('duration_en')
                            ->label('Duration (EN) — e.g. 32 weeks')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description_en')
                            ->label('Description (EN)')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('language')->searchable(),
                Tables\Columns\TextColumn::make('category')->searchable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('subtitle')->searchable(),
                Tables\Columns\TextColumn::make('duration')->searchable(),
                Tables\Columns\TextColumn::make('students_count')->searchable(),
                Tables\Columns\TextColumn::make('hours')->numeric()->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->url(fn ($record) => $record->image)
                    ->defaultImageUrl('https://placehold.co/400x300?text=No+Image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit'   => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}