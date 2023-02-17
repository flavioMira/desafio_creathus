<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CREATHUS FILMES | @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>




<body class="antialiased">

    <div id="app" class="row g-0">
        <div class="col-auto dark:bg-gray-800 border-end border-secondary border-opacity-25 d-none d-md-block">
            <div class="d-flex align-items-center flex-column p-2  sticky-top" >
                <div class=" py-3 d-flex justify-content-center border-bottom border-secondary border-opacity-25">
                    <a  href="{{ route('home') }}">
                        <img src="{{ asset('img/instituto-creathus-squarelogo.svg') }}" width='60' />
                    </a>
                </div>
                <ul class="nav text-center flex-column mb-auto w-100 pb-3">
                                <li class="nav-item border-bottom border-secondary border-opacity-25">
                                    <a class="nav-link link-orange" href=""><i class="bi bi-house fs-3 align-middle"></i><br/>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-orange" href="#"  data-bs-toggle="modal" data-bs-target="#modalAddFilme"><i class="bi bi-plus-circle fs-2 align-middle"></i><br/>Add</a>
                                </li>
                            </ul>
            </div>
        </div>
        <div class="col mx-0">
            <nav class="navbar navbar-expand-md bg-white-100 dark:bg-gray-800 shadow-md">
                <div class="container-fluid">
                    <a class="navbar-brand fs-3 text-orange">
                        @yield('title')
                    </a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto ">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-gray-500" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
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
            <div class="container-fluid relative flex items-top  min-h-screen bg-gray-100 dark:bg-gray-900  py-4 sm:pt-0 dark:text-gray-400">

                @yield('content')

            </div>
        </div>
</body>