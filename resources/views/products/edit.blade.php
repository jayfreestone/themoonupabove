@extends('layouts.base')

@section('content')
    <h1>Edit Product</h1>

    <form action="/products/{{ $product->id }}" method="post">
        @csrf
        @method('patch')
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ $product->name }}">
        <label for="price">Price</label>
        <input id="price" type="number" step="0.01" name="price" value="{{ $product->price }}">
        <button>Submit</button>
    </form>
@endsection
