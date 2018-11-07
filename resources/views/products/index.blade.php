@extends('layouts.base')

@section('content')
    <h1>Products</h1>

    <a href="/products/create">Create new</a>

    <ul>
        @foreach($products as $product)
            <li>
                <h3>
                    {{ $product->name }}
                    @if ($product->category)
                        ({{ $product->category->name }})
                    @endif
                </h3>
                £{{ $product->price }}
                <a href="/products/{{ $product->id }}/edit" class="link ml2 f6">
                    Edit
                </a>
                <a href="/products/{{ $product->id }}/delete" class="link ml2 f6 red">
                    Delete
                </a>
            </li>
        @endforeach
    </ul>
@endsection
