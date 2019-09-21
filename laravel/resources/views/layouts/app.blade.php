<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/favicon.png') }}" type="image/png">

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.typekit.net/wse4azk.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow pt-4 pb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="{{ config('app.name', 'laravel') }}">
                </a>
                <a href="#" class="open-menu d-md-none">
                    <svg width="40" height="24">
                        <line x1="0" y1="0" x2="40" y2="0" style="stroke: #00384d; stroke-width: 2"/>
                        <line x1="0" y1="10" x2="40" y2="10" style="stroke: #00384d; stroke-width: 1"/>
                        <line x1="0" y1="20" x2="40" y2="20" style="stroke: #00384d; stroke-width: 1"/>
                    </svg>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <a href="#" class="close-menu d-md-none">
                        <svg width="40" height="24">
                            <line x1="0" y1="0" x2="40" y2="24" style="stroke: #00384d; stroke-width: 2"/>
                            <line x1="0" y1="24" x2="40" y2="0" style="stroke: #00384d; stroke-width: 2"/>
                        </svg>
                    </a>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-2">
                            <a href="{{ action('PageController@index') }}" class="nav-link text-blue">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="about-us" class="nav-link text-blue">About Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="our-business" class="nav-link text-blue">Our Business</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="our-partners" class="nav-link text-blue">Our Partners</a>
                        </li>
                        <!-- Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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
                        -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-0 pb-0">
            @yield('content')
        </main>
    </div>

    <div class="container-fluid footer bg-blue py-md-3">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <nav class="nav align-items-center navbar navbar-expand-lg">
                        <a class="nav-link text-white" href="#">
                            <img src="{{ asset('storage/img/iglobe.png') }}" alt="{{ config('app.name', 'laravel') }}" width="auto" height="30">
                            &copy; Immco Investments 2016 - 2019
                        </a>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
