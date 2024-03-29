<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function jadwal_kegiatans()
    {
        return $this->hasMany(Contact::class);
    }
}
