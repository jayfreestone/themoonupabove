@extends('layouts.base')

@section('content')
    <h1>Order {{ $order->id }}</h1>
    @if ($order->items)
        <ul>
            @foreach($order->items as $order_item)
                <li>
                    {{ $order_item->product->name }}
                    £{{ $order_item->product->price }}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
