<?php

namespace App\Filament\Resources\TeacherResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kelas;
use App\Models\Periode;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Actions\Action;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class ClassRoomRelationManager extends RelationManager
{
    protected static string $relationship = 'classRoom';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('periode_id')
    ->label('Select Periode')
    ->options(Periode::all()->pluck('name', 'id'))
    ->relationship(name: 'periode', titleAttribute: 'name')
    ->searchable()
    ->preload()
    ->createOptionForm([
        TextInput::make('name')
            ->required()
            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
        Hidden::make('slug'), // ✅ Tidak ada createOptionAction() di sini
    ])
    ->createOptionAction(fn (Action $action) => // ✅ Sekarang ada di luar createOptionForm()
        $action
            ->modalHeading('Add Classroom')
            ->modalButton('Add Classroom')
            ->modalWidth('1xl')
    ),

                Select::make('periode_id')
    ->label('Select Periode')
    ->options(Periode::all()->pluck('name', 'id'))
    ->relationship(name: 'periode', titleAttribute: 'name')
    ->searchable()
    ->preload()
    ->createOptionForm([
        TextInput::make('name')
            ->required()
            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
        Hidden::make('slug'), // ✅ Tidak ada createOptionAction() di sini
    ])
    ->createOptionAction(fn (Action $action) => // ✅ Sekarang ada di luar createOptionForm()
        $action
            ->modalHeading('Add Classroom')
            ->modalButton('Add Classroom')
            ->modalWidth('2xl')
    )
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
