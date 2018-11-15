@extends('layouts.base')

@section('content')
    <h1>Your Orders</h1>

    @if (count($orders))
        <ul>
            @foreach($orders as $order)
                <li>
                    <h3>
                        <a href="/account/orders/{{ $order->id }}">
                            Order {{ $order->id }}
                        </a>
                    </h3>
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
                </li>
            @endforeach
        </ul>
    @else
        No orders.
    @endif
@endsection
