<?php

// app/Models/Category.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tambahkan 'nama_kategori' ke dalam properti fillable
    protected $fillable = [
        'nama_kategori',
        'deskripsi'
        // kolom lain yang ingin Anda izinkan untuk mass assignment
    ];

    // Sebagai alternatif, jika Anda menggunakan guarded:
    // protected $guarded = ['id']; // hanya kolom 'id' yang tidak dapat di-mass assign
}
