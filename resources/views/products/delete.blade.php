@extends('layouts.base')

@section('content')
    <h1>Delete Product</h1>

    <form action="/products/{{ $product->id }}" method="post">
        @csrf
        @method('delete')
        <p>Are you sure?</p>
        <button>Submit</button>
    </form>
@endsection
