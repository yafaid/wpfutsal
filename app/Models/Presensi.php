<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Siswa;

class Presensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'kelas_id',
        'tanggal',
        'keterangan',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
