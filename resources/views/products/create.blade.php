@extends('layouts.base')

@section('content')
    <h1>Create Product</h1>

    @if ($errors->any())
        <div class="red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error  }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products" method="post" class="measure">
        @csrf
        <label for="name" class="f6 b db mb2">Name</label>
        <input id="name" type="text" name="name" class="input-reset ba b--black-20 pa2 mb2 db w-100" value="{{ old('name') }}">
        <label for="price" class="f6 b db mb2">Price</label>
        <input id="price" type="number" step="0.01" name="price" class="input-reset ba b--black-20 pa2 mb2 db w-100" value="{{ old('price') }}">

        <h3>Stock</h3>
        @foreach($locations as $location)
            <label for="stock-{{ $location->id }}" class="f6 b db mb2">{{ $location->name }}</label>
            <input id="stock-{{ $location->id }}" type="number" name="stock-{{ $location->id }}" class="input-reset ba b--black-20 pa2 mb2 db w-100">
        @endforeach
        <button class="f6 link dim br0 ph3 pv2 dib white bg-dark-blue bn">Submit</button>
    </form>
@endsection
