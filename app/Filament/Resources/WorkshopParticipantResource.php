<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkshopParticipantResource\Pages;
use App\Models\WorkshopParticipant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WorkshopParticipantResource extends Resource
{
    protected static ?string $model = WorkshopParticipant::class;

    // Gunakan ikon yang valid
    protected static ?string $navigationIcon = 'heroicon-o-users';  // Ikon untuk peserta
    protected static ?string $navigationLabel = 'Peserta Workshop';
    protected static ?string $navigationGroup = 'Manajemen Workshop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_peserta')
                    ->label('Nama Peserta')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('email')
                    ->label('Email Peserta')
                    ->required()
                    ->email(),
                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_peserta')
                    ->label('Nama Peserta')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('catatan')
                    ->label('Catatan')
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
            'index' => Pages\ListWorkshopParticipants::route('/'),
            'create' => Pages\CreateWorkshopParticipant::route('/create'),
            'edit' => Pages\EditWorkshopParticipant::route('/{record}/edit'),
        ];
    }
}
