<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tanggal',
        'instruktur',  // Ganti dengan relasi instruktur
        'biaya',
        'deskripsi',
    ];

    // Relasi dengan model Instructor
    public function instruktur()
    {
        return $this->belongsTo(WorkshopInstructor::class, 'instruktur', 'id'); // asumsikan 'instruktur' di tabel workshop adalah FK ke tabel instructors
    }
}
