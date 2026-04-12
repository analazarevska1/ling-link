<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('language')
                    ->required()
                    ->default('english')
                    ->options([
                        'english'    => 'English',
                        'german'     => 'German',
                        'macedonian' => 'Macedonian',
                    ])
                    ->live(), // 👈 this makes it trigger a re-render when changed

                Forms\Components\Select::make('category')
                    ->required()
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
                                'adults'      => 'Adults',
                                'specialized' => 'Specialized',
                                'intensive'   => 'Intensive',
                            ],
                            'macedonian' => [
                                'children/adults'    => 'Children/Adults',
                                'individual'         => 'Individual',
                            ],
                            default => [
                                'children'    => 'Children',
                                'adults'      => 'Adults',
                                'specialized' => 'Specialized',
                            ],
                        };
                    })
                    ->placeholder('Select category'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('duration')
                    ->maxLength(255),
                Forms\Components\TextInput::make('students_count')
                    ->maxLength(255),
                Forms\Components\TextInput::make('hours')
                    ->numeric(),
                Forms\Components\Select::make('level')
                    ->options([
                        'A0'    => 'A0',
                        'A1-A2' => 'A1-A2',
                        'B1-B2' => 'B1-B2',
                        'C1-C2' => 'C1-C2',
                    ])
                    ->placeholder('Select level'),
                Forms\Components\Select::make('age_group')
                    ->options([
                        'до 7'  => 'до 7',
                        'до 12' => 'до 12',
                        '13-17' => '13-17',
                        '18-25' => '18-25',
                        '26-35' => '26-35',
                        '40+'   => '40+',
                    ])
                    ->placeholder('Select age group'),
                Forms\Components\FileUpload::make('image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('language')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable(),
                Tables\Columns\TextColumn::make('students_count')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hours')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
