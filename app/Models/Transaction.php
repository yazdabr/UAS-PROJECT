<?php

// app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'nama_pelanggan',
        'email',
        'bank',
        'jumlah_bayar',
        'status',
        'bukti_pembayaran', // kolom untuk path file
    ];

    // Menambahkan validasi untuk upload bukti pembayaran
    public function getBuktiPembayaranUrlAttribute()
    {
        // Menghasilkan URL lengkap untuk file gambar yang diupload
        return Storage::url($this->bukti_pembayaran);
    }
}

