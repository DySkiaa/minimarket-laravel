<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- admin css script -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <livewire:styles/>
     <livewire:scripts/>
     <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 300px;
                top: 10px;
            }
            .top-right-login {
                position: absolute;
                right: 400px;
                top: 10px;
            }
             .top-right-register {
                position: absolute;
                right: 300px;
                top: 10px;
            }
            .top-right-username {
                position: absolute;
                right: 100px;
                top: 10px;
            }
            

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body class="sb-nav-fixed">
    <!-- Bagian user jika belum login --> 
    @guest 
     <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'DyShop') }} -->
                    DyShop
                </a>
                <!-- <img class="navbar-brand ps-3" src="{{ url('images/logo.png')}}" alt="" width="65"> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto  ">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                                <a class="nav-link" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/produkuser">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kategoriuser">Kategori</a>
                            </li>
                            <li class="nav-item top-right-login">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item top-right-register ">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
    <!-- batas bagian user jika belum login --> 
    <!-- Bagian Admin -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-5" href="#">DyShop</a>
        
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item top-right-username">
                <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Hello {{ Auth::user()->name }}<i class="fas fa-user fa-fw"></i></a>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"> Homepage</div>
                        <a class="nav-link" href="/home"><i class="fa-solid fa-house"></i>
                            <div class="sb-nav-link-icon"></div>
                            Home
                        </a>
                        <div class="sb-sidenav-menu-heading">ABOUT</div>
                        <a class="nav-link" href="/kategori"><i class="fa-solid fa-filter"></i>
                            <div class="sb-nav-link-icon"></i></div>
                            Kategori
                        </a>
                        <a class="nav-link" href="/produk">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-list-ul"></i></div>
                            Produk
                        </a>
                        <a class="nav-link" href="/pesanan"><i class="fa-solid fa-cart-shopping"></i>
                            <div class="sb-nav-link-icon"></div>
                            Pesanan
                        </a>
                        <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="sb-nav-link-icon" >
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> {{ __('Logout') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                        </a>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
        <!-- Batas Admin -->
        <!-- <main class="py-4">
            @yield('content')
        </main> -->
        <div id="layoutSidenav_content">
            <main>
                    @yield('content')
        
    </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"> </script>
    <script src="/assets/demo/datatables-demo.js"></script>
    <script src="/assets/js/datatables-simple-demo.js"></script>

</html>
