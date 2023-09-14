<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans'; // Nama tabel di basis data

    protected $fillable = [
        'kodejur', 'nama',
    ];

    protected $primaryKey = 'id'; // Primary key

    public $timestamps = false; // Nonaktifkan timestamps
}
