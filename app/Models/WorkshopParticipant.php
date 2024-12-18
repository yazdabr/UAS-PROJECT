<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopParticipant extends Model
{
    use HasFactory;

    // Menambahkan nama_peserta ke dalam fillable property
    protected $fillable = [
        'nama_peserta', // Tambahkan nama_peserta di sini
        'workshop_id', // Kolom lain yang diperlukan
        'email', // Kolom lain yang diperlukan
        // Kolom lainnya yang perlu diisi mass-assignment
    ];
}
