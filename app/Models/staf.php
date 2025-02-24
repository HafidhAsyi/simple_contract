<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class staf extends Model
{
    protected $guarded = [];
    //satu staf punya banyak usaha (relasi one to many)
    public function usahas(): HasMany
    {
        return $this->hasMany(usaha::class);
    }
}
