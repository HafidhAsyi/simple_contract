<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class riwayat extends Model
{
    // protected $guarded = [];
    // //banyak riwayat dari satu usaha (relasi many to one)
    // public function usaha(): BelongsTo
    // {
    //     return $this->belongsTo(usaha::class);
    // }

    use HasFactory;
}
