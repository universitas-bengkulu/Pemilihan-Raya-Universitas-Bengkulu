<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwal_id',
        'judul',
        'deskripsi',
        'tgl',
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
