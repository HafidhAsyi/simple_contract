<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class laporan extends Model
{
    protected $guarded = [];
    //banyak laporan dari satu usaha (relasi many to one)
    public function usaha(): BelongsTo
    {
        return $this->belongsTo(usaha::class);
    }
}
