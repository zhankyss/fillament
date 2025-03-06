<?php

namespace App\Filament\Resources\TeacherResource\RelationManagers;

use App\Models\Kelas;
use App\Models\Periode;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class ClassRoomRelationManager extends RelationManager
{
    protected static string $relationship = 'classRoom';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kelas_id')
                    ->label('select kelas')
                    ->options(Kelas::all()->pluck('kelas', 'id'))
                    ->searchable(),
                Select::make('periode_id')
                    ->label('select periode')
                    ->options(Periode::all()->pluck('name', 'id'))
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('kelas.kelas'),
                Tables\Columns\TextColumn::make('periode.name'),
                ToggleColumn::make('kelas.is_open'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
