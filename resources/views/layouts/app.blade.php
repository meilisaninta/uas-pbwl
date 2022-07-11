<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #9966ff;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('icons/favicon.png') }}" width="30">{{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="px-3 rounded-start" style="background-color: white;">
                            <a class="nav-link {{ Route::is('home') ? 'text-success' : '' }}" href="{{ url('/home') }}" style="color:black;"><b>Dashboard</b></a>
                        </li>
                        <li class="px-3" style="background-color: white;">
                            <a class="nav-link {{ Route::is('transaksi') ? 'text-success' : '' }}" href="{{ url('/transaksi') }}" style="color:black;"><b>Transaksi</b></a>
                        </li>
                        <li class="px-3" style="background-color: white;">
                            <a class="nav-link {{ Route::is('pelanggan') ? 'text-success' : '' }}" href="{{ url('/pelanggan') }}" style="color:black;"><b>Pelanggan</b></a>
                        </li>
                        <li class="px-3 rounded-end" style="background-color: white;">
                            <a class="nav-link {{ Route::is('pakaian') ? 'text-success' : '' }}" href="{{ url('/pakaian') }}" style="color:black;"><b>Pakaian</b></a>
                        </li>
                        <li class="nav-item dropdown ms-3">
                            <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Hai, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="container">
            <p class="text-center text-muted">@Meilisa Nintasari &copy; 2022</p>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>