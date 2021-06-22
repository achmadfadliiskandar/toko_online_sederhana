<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="https://www.wallpaperup.com/uploads/wallpapers/2014/01/21/234209/518511aba878667dc76e37129d58b136.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>@yield('title')</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand" href="/">LOREM IPSUM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <a class="nav-link {{request()->is('/')? 'active' : ''}}" href="/">Home </a>
    <a class="nav-link {{request()->is('about')? 'active' : ''}}" href="/about">About</a>  
    <a class="nav-link {{request()->is('pelayanan')? 'active' : ''}}" href="/pelayanan">Service</a>  
    <a class="nav-link {{request()->is('baskets')? 'active' : ''}}" href="/baskets">Basket</a>  
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
@php
$barangs = Auth::user()->barangs->count('stok');
echo "<a class='btn btn-dark' href='/barangs'><i class='fa fa-shopping-cart'></i> $barangs</a>";
@endphp
<div class="dropdown">
  <a style="background-color: transparent;text-decoration:none;" class="dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <strong class="mt-2 text-light mr-3 ml-3 text-uppercase">{{ Auth::user()->name }}</strong>
    <img src="https://grandimageinc.com/wp-content/uploads/2015/09/icon-user-default.png" class="rounded-circle" alt="user" width="40" height="40">
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
</div>
</div>
</div>
</nav>


@yield('container')
<div class="container">
<div class="row">
  @yield('grid')
</div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>