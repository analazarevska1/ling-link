<?php

namespace App\Filament\Resources\ExamResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LevelsRelationManager extends RelationManager
{
    protected static string $relationship = 'levels';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('level')->required()->maxLength(255),
            Forms\Components\TextInput::make('name')->maxLength(255),
            Forms\Components\TextInput::make('order')->required()->numeric()->default(0),
            Forms\Components\Textarea::make('description')->columnSpanFull(),
            Forms\Components\Repeater::make('can_do')
                ->label('Competencies (Checkmarks)')
                ->simple(
                    Forms\Components\TextInput::make('competency')->required(),
                )
                ->columnSpanFull(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('level')
            ->columns([
                Tables\Columns\TextColumn::make('order')->numeric()->sortable(),
                Tables\Columns\TextColumn::make('level')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
            ])
            ->headerActions([Tables\Actions\CreateAction::make()])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->defaultSort('order', 'asc');
    }
}
