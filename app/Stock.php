<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $table = 'stock';

    protected $fillable = [
        'product_id',
        'location_id',
        'quantity',
    ];
}
