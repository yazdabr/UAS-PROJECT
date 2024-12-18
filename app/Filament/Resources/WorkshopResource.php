<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkshopResource\Pages;
use App\Models\Workshop;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WorkshopResource extends Resource
{
    protected static ?string $model = Workshop::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Workshop';
    protected static ?string $navigationGroup = 'Manajemen Workshop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul Workshop')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal')
                    ->label('Tanggal Workshop')
                    ->required(),
                Forms\Components\TextInput::make('instruktur')
                    ->label('Instruktur')
                    ->required(),
                Forms\Components\TextInput::make('biaya')
                    ->label('Biaya')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Workshop')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Workshop')
                    ->date(),
                Tables\Columns\TextColumn::make('instruktur')
                    ->label('Instruktur'),
                Tables\Columns\TextColumn::make('biaya')
                    ->label('Biaya')
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('deskripsi')
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
            'index' => Pages\ListWorkshops::route('/'),
            'create' => Pages\CreateWorkshop::route('/create'),
            'edit' => Pages\EditWorkshop::route('/{record}/edit'),
        ];
    }
}
