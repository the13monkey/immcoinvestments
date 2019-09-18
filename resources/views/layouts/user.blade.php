<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

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
    <div class="container-fluid" id="app">
        <div class="row">
            @if ($message = Session::get('success'))
            <p class="text-success text-center py-3 bg-light border-bottom w-100 display-5" id="flash-message">{{ $message }}</p>
            @endif
        </div>
        <div class="row">
            <div class="col-md col-md-2">
                @yield('userleft')
            </div>
            <div class="col-md col-md-10 border-left bg-white">
                @yield('userright')
            </div>            
        </div>
    </div>
</div>
    <div class="container-fluid footer bg-blue py-md-3">
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <nav class="nav align-items-center navbar navbar-expand-lg">
                        <a class="nav-link text-white" href="#">
                            <img src="{{ asset('img/iglobe.png') }}" alt="{{ config('app.name', 'laravel') }}" width="auto" height="30">
                            &copy; Immco Investments 2016 - 2019
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
