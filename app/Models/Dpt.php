<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dpt extends Model
{
    use HasFactory;

    protected $primaryKey = 'primary_key';
    public $incrementing = false;
    protected $keyType = 'string'; // Tipe data primary key

    /**
     * Get the rekapitulasi associated with the Dpt
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rekapitulasi(): HasOne
    {
        return $this->hasOne(Rekapitulasi::class, 'dpt_npm', 'npm');
    }
}
