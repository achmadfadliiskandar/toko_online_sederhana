    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="https://www.wallpaperup.com/uploads/wallpapers/2014/01/21/234209/518511aba878667dc76e37129d58b136.jpg"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LOREM IPSUM</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->gambar === NULL)
                <img src="https://images.pexels.com/photos/376718/pexels-photo-376718.jpeg?cs=srgb&dl=pexels-daniel-pixelflow-376718.jpg&fm=jpg" class="rounded-circle" alt="user" width="40" height="40">
                @else
                <img src="/gambaruser/{{Auth::user()->gambar}}" class="rounded-circle" alt="user" width="40" height="40">
                @endif
            </div>
            <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            @if (Auth::check())
            @if (Auth::user()->role == 'admin')
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                    <p>
                    Basket
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/admin" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Baskets</p>
                        </a>
                    </li>
                    
                    </ul>
                </li>
                </ul>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fas fa-money-bill-alt"></i>
                    <p>
                        Cod
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/datacod" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Cod</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fa fa-credit-card"></i>
                    <p>
                        Transaksi Online
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/datato" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Transaksionline</p>
                        </a>
                    </li>
                    </ul>
                </li>
                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fa fa-credit-card"></i>
                    <p>
                        Konfirmasi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/konfirmasi" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Konfirmasi</p>
                        </a>
                    </li> --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/user" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data User</p>
                            </a>
                        </li>
                    </ul>
                    
            @endif
            @if (Auth::user()->role == 'penjual')
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-shopping-cart"></i>
                    <p>
                    Basket
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/penjual" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Baskets</p>
                        </a>
                    </li>
                    
                    </ul>
                </li>
                </ul>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fas fa-money-bill-alt"></i>
                    <p>
                        Cod
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/datacod" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Cod </p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fa fa-credit-card"></i>
                    <p>
                        Transaksi Online
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/datato" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Transaksionline</p>
                        </a>
                    </li>
                    </ul>
                </li>
                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon 	fa fa-credit-card"></i>
                    <p>
                        Konfirmasi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/konfirmasi" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Konfirmasi</p>
                        </a>
                    </li> --}}
                    </ul>  
            @endif
            @endif
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->