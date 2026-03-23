<?php

namespace App\Filament\Resources\ExamResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StructurePartsRelationManager extends RelationManager
{

    protected static string $relationship = 'structureParts';
    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('type')->maxLength(255),
            Forms\Components\DatePicker::make('exam_date')->required(),
            Forms\Components\DatePicker::make('registration_deadline'),
            Forms\Components\TextInput::make('location')->maxLength(255),
            Forms\Components\TextInput::make('max_participants')->numeric(),
            Forms\Components\Toggle::make('is_active')->default(true)->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('exam_date')
            ->columns([
                Tables\Columns\TextColumn::make('type')->searchable(),
                Tables\Columns\TextColumn::make('exam_date')->date()->sortable(),
                Tables\Columns\TextColumn::make('registration_deadline')->date()->sortable(),
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\TextColumn::make('max_participants')->numeric()->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean(),
            ])
            ->headerActions([Tables\Actions\CreateAction::make()])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->defaultSort('exam_date', 'desc');
    }
}
