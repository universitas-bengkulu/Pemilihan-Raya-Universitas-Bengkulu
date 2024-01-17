<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekapitulasi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class);
    }

    /**
     * Get the user that owns the Rekapitulasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Dpt::class, 'dpt_npm', 'npm');
    }

    /**
     * Get the jadwal that owns the Rekapitulasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id');
    }
}
