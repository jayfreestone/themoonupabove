<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id');
    }
}
