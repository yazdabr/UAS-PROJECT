<?php

// app/Filament/Resources/TransactionResource/Pages/ListTransactions.php
// app/Filament/Resources/TransactionResource/Pages/ListTransactions.php
namespace App\Filament\Resources\TransactionResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TransactionResource;

class ListTransactions extends ListRecords
{
    protected static string $resource = TransactionResource::class;

    protected function getActions(): array
    {
        return [
            // Tombol Create di atas tabel
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
