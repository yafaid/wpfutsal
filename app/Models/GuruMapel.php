<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Mapel;

class GuruMapel extends Model
{
    use HasFactory;
    protected $table = 'guru_mapel';
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'kodeguru');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'kodemapel');
    }
}
