<?php

namespace App\Http\Controllers;

use App\Product;
use App\Stock;
use App\Location;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'locations' => Location::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:3'],
            'price' => ['required', 'numeric'],
        ]);

        $product = Product::create($attributes);

        $stock_fields = Location::all()
            ->pluck('id')
            ->map(function ($id) {
                return [
                    'id' => $id,
                    'field_name' => "stock-{$id}",
                ];
            });

        $product_id = $product->id;

        $stock_fields->each(function($stock_entry) use ($request, $product_id) {
            $request->validate([ $stock_entry['field_name'] => ['numeric'] ]);

            Stock::create([
                'product_id'  => $product_id,
                'location_id' => $stock_entry['id'],
                'quantity'    => $request->input($stock_entry['field_name']),
            ]);
        });

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update(['name', 'price']);
        return redirect('/products');
    }

    /**
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product) {
        return view('products.delete', [
            'product' => $product,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }
}
