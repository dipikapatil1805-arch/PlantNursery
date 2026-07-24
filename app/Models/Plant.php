<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'image',
        'description',
        'care_guide',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}