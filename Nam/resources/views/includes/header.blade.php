<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Victoria, Gabriela y Guillermo">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>¡Ñam!</title>

    <link rel="canonical" href="#">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


</head>

<body>
    <header class="fixed-top  accent_bg main_header">
        <div class="container">
            <div class="top_bar row d-flex justify-content-between align-items-center pt-2">
                <ul class="social  d-flex flex-row justify-content-between align-items-center list-unstyled">
                    <li class="px-2">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="px-2">
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="px-2">
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <nav class="user_nav">
                    <ul class="list-unstyled d-flex flex-row justify-content-between align-items-center list-unstyled">
                        @guest
                            <li class="px-2">
                                <a href=" {{ route('login') }}" class="small white ">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="px-2">
                                    <a href="{{ route('register') }}" class="small white ">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="px-2">
                                <span class="small white ">{{ Auth::user()->name }}</span> <span class="small white"> | </span>
                            </li>
                            <li class="px-2">
                                <a class="small white " href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @endguest
                </nav>
            </div>
            <div class="row ">
                <nav class="navbar navbar-expand-md row d-flex justify-content-between w-100 ">
                    <a class="navbar-brand d-sm-none " href="index.php ">¡Ñam!</a>
                    <button class="navbar-toggler accent_border " type="button " data-toggle="collapse " data-target="#toogleNavbar " aria-controls="toogleNavbar " aria-expanded="false " aria-label="Toggle navigation "><i class="fas fa-bars "></i></button>

                    <div class="collapse navbar-collapse ml-auto justify-content-center align-content-center align-items-center " id="toogleNavbar ">
                        <ul class="navbar-nav ">
                            <li class="nav-item ">
                                <a class="nav-link dark kappa-bold text-uppercase " href="# ">¡Comida rica!</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dark kappa-bold text-uppercase " href="# ">Packs</a>
                            </li>
                            <li class="nav-item d-sm-block d-xs-none ">
                                <a class="navbar-brand " href="{{ route('home') }}">¡Ñam!</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dark kappa-bold text-uppercase " href="{{ route('products.index') }} ">Comprar</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dark kappa-bold text-uppercase " href="# ">Faqs</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dark kappa-bold text-uppercase " href="{{ route('cart') }}"><i class="fas fa-shopping-cart "></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>