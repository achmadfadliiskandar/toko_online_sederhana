<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Example split danger button -->
    <div class="btn-group">
    <button type="button" class="btn btn-danger">Role Saat Ini : {{Auth::user()->role}}</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
      <a class="text-dark" href="user/edit/{{Auth::user()->id}}">Edit Akun</a>
      <hr>
      <a class="btn-link text-dark" style="text-decoration:none;" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </div>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="/tableadmin" class="nav-link">Table Admin</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/data-table" class="nav-link">Search Admin</a>
      </li> --}}
      <li>

      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>