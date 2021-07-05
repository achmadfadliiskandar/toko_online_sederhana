<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://www.wallpaperup.com/uploads/wallpapers/2014/01/21/234209/518511aba878667dc76e37129d58b136.jpg">
    <!-- <title>{{ config('title', 'Login && Register')}}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="icon" href="https://www.wallpaperup.com/uploads/wallpapers/2014/01/21/234209/518511aba878667dc76e37129d58b136.jpg">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    LOREM IPSUM
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::check())
                        @if (Auth::user()->role == 'pembeli')
                        <a class="nav-link" href="{{url('/')}}">Home </a>
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                        <a class="nav-link" href="{{url('/pelayanan')}}">Services</a>
                        <a class="nav-link" href="{{url('/baskets')}}">Basket</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a class="btn btn-primary" href="http://127.0.0.1:8000/admin">Ruang Admin</a>
                        @endif
                        @if (Auth::user()->role == 'penjual')
                        <a class="nav-link" href="http://127.0.0.1:8000/penjual">Ruang Penjual</a>
                        @endif
                        @endif
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="dropdown">
                        <a style="background-color: transparent;text-decoration:none;" class="dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <strong class="mt-2 text-light mr-3 ml-3 text-uppercase">{{ Auth::user()->name }}</strong>
                        <img src="/gambaruser/{{Auth::user()->gambar}}" class="rounded-circle" alt="user" width="40" height="40">
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                        <a class="btn-link text-dark" style="text-decoration:none;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                        </div>
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
    </div>
    <footer class="bg-dark text-white mt-5">
      <div class="container">
      <div class="row">
        <div class="col-md-4 mt-4">
          <h5>Alamat</h5>
          <p>jalan kopo no 27 rt01 rw 13 beji depok</p>
        </div>
        <div class="col-md-4  mt-4">
          <h5>LOREM IPSUM</h5>
          <a href="about.html" style="color: white;">about</a>
          <br>
        <a href="contact.html" style="color: white;">contact</a>
        <br>
          <a href="pembayaran.html" style="color: white;">pembayaran</a>
        </div>
        <div class="col-md-4  mt-4">
          <h5>Sosmed</h5>
          <p>081905157614</p>
          <a href="https://www.instagram.com/17achmadfadliiskandar/" style="color: white;">instagram</a>
          <br>
          <a href="https://github.com/achmadfadliiskandar" style="color: white;">github</a>
          <br>
          <a href="https://www.youtube.com/channel/UCBmc7KRrQLjLJOZkPC7JSUw?view_as=subscriber" style="color: white;">youtube</a>
          <br>
          <a href="https://mail.google.com/mail/u/0/#inbox" style="color: white;">gmail</a>
          <br>
          <a href="https://id.linkedin achmadfadliiskandar.com/" style="color: white;">linkedin</a>
        </div>
        <div class="col-lg-12 mt-3" style="border-top: 1px solid white;" id="copi">
          <p class="text-center">&copy; copyright LOREMIPSUM 2020</p>
        </div>
      </div>
    </footer>
</body>
</html>
