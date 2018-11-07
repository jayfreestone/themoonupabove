<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tachyons/4.11.1/tachyons.min.css" />
    </head>
    <body class="pa5 sans-serif">
        <nav>
            <ul class="pl0 mt0 mb4">
                <li class="dib mr3">
                    <a class="link dim black b" href="/">MUA</a>
                </li>
                <li class="dib mr3">
                    <a class="link dim gray" href="/products">Shop</a>
                </li>
                <li class="dib mr3">
                    <a class="link dim gray" href="/about">About</a>
                </li>
                <li class="dib mr3">
                    <a class="link dim gray" href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
