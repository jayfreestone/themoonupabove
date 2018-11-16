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
                    <a class="link dim gray" href="{{ route('products.index') }}">Shop</a>
                </li>
                <li class="dib mr3">
                    <a class="link dim gray" href="/about">About</a>
                </li>
                <li class="dib mr3">
                    <a class="link dim gray" href="/contact">Contact</a>
                </li>
                @guest
                    <li class="dib mr3">
                        <a class="link dim gray" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="dib mr3">
                        @if (Route::has('register'))
                            <a class="link dim gray" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
