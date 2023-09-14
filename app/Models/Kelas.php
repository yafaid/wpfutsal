<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jurusan;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodekelas',
        'deskripsi',
        'jurusan_id',
    ];

    // Definisi relasi dengan model Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}
