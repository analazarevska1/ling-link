<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamPrepResource\Pages;
use App\Filament\Resources\ExamPrepResource\RelationManagers;
use App\Models\ExamPrep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamPrepResource extends Resource
{
    protected static ?string $model = ExamPrep::class;

    // Changed the icon to an academic cap to fit the "Exam" vibe
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Подготовка за испити';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category')
                    ->label('Категорија / Category')
                    ->options([
                        'Англиски јазик' => 'Англиски јазик', 
                        'Германски јазик' => 'Германски јазик', 
                        'Македонски јазик' => 'Македонски јазик', 
                        'Француски јазик' => 'Француски јазик', 
                        'Италијански јазик' => 'Италијански јазик',
                        'Државна матура' => 'Државна матура'
                    ])
                    ->required()
                    ->native(false) // Makes the dropdown UI look modern
                    ->columnSpan(1),

                Forms\Components\TextInput::make('exam_group')
                    ->label('Група на испити / Exam Group')
                    ->placeholder('e.g., Cambridge English, TOEFL iBT')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1),

                Forms\Components\TextInput::make('name')
                    ->label('Ниво / Exam Level')
                    ->placeholder('e.g., A2 Key (KET)')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('description')
                    ->label('Опис / Description')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category')
                    ->label('Категорија')
                    ->badge()
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('exam_group')
                    ->label('Група')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Испит')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            // Added default sorting so it groups nicely in the admin table
            ->defaultSort('category', 'asc') 
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
            'index' => Pages\ListExamPreps::route('/'),
            'create' => Pages\CreateExamPrep::route('/create'),
            'edit' => Pages\EditExamPrep::route('/{record}/edit'),
        ];
    }
}