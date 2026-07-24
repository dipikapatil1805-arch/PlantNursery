<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'plant_id',
        'quantity',
    ];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}