<?php

// database/migrations/xxxx_xx_xx_create_transactions_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('kode_transaksi');
        $table->string('nama_pelanggan'); // Pastikan kolom ini ada
        $table->string('email');
        $table->string('bank');
        $table->decimal('jumlah_bayar', 15, 2);
        $table->enum('status', ['pending', 'completed', 'failed']);
        $table->string('bukti_pembayaran');
        $table->timestamps();
    });
}


    public function down()
    {
        
        $table->dropColumn('nama_pelanggan');
        Schema::dropIfExists('transactions');
    }
};
