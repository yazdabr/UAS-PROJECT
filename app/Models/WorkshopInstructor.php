<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopInstructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_instruktur',
    ];

    // Relasi dengan workshop
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
