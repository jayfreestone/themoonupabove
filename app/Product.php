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

    public function stock($location_id = null)
    {
        return $this
            ->hasMany(Stock::class, 'product_id')
            ->when(isset($location_id), function($collection) use ($location_id) {
                return $collection->where('location_id', $location_id);
            })
            ->join('locations', 'locations.id', '=', 'stock.location_id')
            ->select('locations.name as location_name', 'location_id', 'quantity');
    }

    public function addStock($location_id, $quantity)
    {
        Stock::create([
            'product_id'  => $this->id,
            'location_id' => $location_id,
            'quantity'    => $quantity,
        ]);
    }
}
