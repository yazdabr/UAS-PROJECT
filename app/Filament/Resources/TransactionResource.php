<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationLabel = 'Transaksi';
    protected static ?string $navigationGroup = 'Manajemen Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_transaksi')
                    ->label('Kode Transaksi')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('nama_pelanggan')
                    ->label('Nama Pelanggan')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('bank')
                    ->label('Bank')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_bayar')
                    ->label('Jumlah Bayar')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->label('Status Transaksi')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'failed' => 'Failed',
                    ])
                    ->default('pending'),
                    FileUpload::make('bukti_pembayaran')
                    ->label('Upload Bukti Pembayaran')
                    ->disk('public')  // Menyimpan file di disk public
                    ->directory('bukti_pembayaran') // Direktori penyimpanan
                    ->image() // Menangani file gambar
                    ->maxSize(10240) // Ukuran maksimal file 10MB
                    ->required(),  // Membuat field ini wajib diisi
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_transaksi')
                    ->label('Kode Transaksi')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pelanggan')
                    ->label('Nama Pelanggan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable(),
                Tables\Columns\TextColumn::make('bank')
                    ->label('Bank')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayar')
                    ->label('Jumlah Bayar')
                    ->sortable()
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status Transaksi')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('bukti_pembayaran')
                ->label('Bukti Pembayaran')
                ->url(fn ($record) => $record->bukti_pembayaran_url),
                
            ])
            ->filters([]) // Jika ada filter, bisa ditambahkan di sini
            ->actions([ // Actions untuk setiap baris tabel
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([ // Bulk actions untuk operasi massal
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
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
