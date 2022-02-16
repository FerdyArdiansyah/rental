<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
    </head>
    <body>
        <div id="app">
            @include('layouts.nav')
            <main class="">
                <div class="jumbotron" style="margin-bottom: 1px">
                    <div class="container" style="margin-top: 1px">
                        <h4>Hallo, Ferdy</h4>
                        <h4>Selamat Datang Kembali Dan Selamat Melakukan Pekerjaan Anda</h4>
                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="{{route('dashboard.index')}}" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('barang.index')}}" class="nav-link">Daftar Barang</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('transaksi.index')}}" class="nav-link">Transaksi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('kembali.index')}}" class="nav-link">Pengembalian</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                      Laporan
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{route('cetak.barang')}}">Barang</a>
                                      <a class="dropdown-item" href="{{route('cetak.transaksi')}}">Transaksi</a>
                                      <a class="dropdown-item" href="{{route('cetak.pengembalian')}}">Pengembalian</a>
                                      <a class="dropdown-item" href="{{route('cetak.dashboard')}}">Dashboard</a>
                                    </div>
                                  </li>
                            </ul>
                        </div>
                    </nav>
                @yield('content')
            </main>
        </div>
    </body>
</html>