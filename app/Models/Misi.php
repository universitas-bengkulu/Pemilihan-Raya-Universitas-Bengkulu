<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class);
    }
}
