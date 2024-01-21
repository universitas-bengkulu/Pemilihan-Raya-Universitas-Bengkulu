<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function misis()
    {
        return $this->hasMany(Misi::class);
    }

    public function rekapitulasis()
    {
        return $this->hasMany(Rekapitulasi::class);
    }
}
