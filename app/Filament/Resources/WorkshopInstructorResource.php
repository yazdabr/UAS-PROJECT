<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkshopInstructorResource\Pages;
use App\Models\WorkshopInstructor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WorkshopInstructorResource extends Resource
{
    protected static ?string $model = WorkshopInstructor::class;

    // Gunakan ikon yang valid
    protected static ?string $navigationIcon = 'heroicon-o-user';  // Ikon untuk instruktur
    protected static ?string $navigationLabel = 'Instruktur Workshop';
    protected static ?string $navigationGroup = 'Manajemen Workshop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_instruktur')
                    ->label('Nama Instruktur')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('bio')
                    ->label('Deskripsi Instruktur')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_instruktur')
                    ->label('Nama Instruktur')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('bio')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkshopInstructors::route('/'),
            'create' => Pages\CreateWorkshopInstructor::route('/create'),
            'edit' => Pages\EditWorkshopInstructor::route('/{record}/edit'),
        ];
    }
}
