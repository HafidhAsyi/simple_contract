<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class usaha extends Model
{
    // protected $guarded = [];
    // //satu usaha punya banyak laporan (relasi one to many)
    // public function laporans(): HasMany
    // {
    //     return $this->hasMany(laporan::class);
    // }

    //satu usaha punya banyak riwayat (relasi one to many)
    public function riwayats(){
        return $this->hasMany(riwayat::class);
    }

    //banyak usaha dari satu staf (relasi many to one)
    // public function staf(): BelongsTo
    // {
    //     return $this->belongsTo(staf::class);
    // }

    use HasFactory;

    use SoftDeletes;


}
