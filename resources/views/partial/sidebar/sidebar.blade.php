    <!-- Brand Logo -->
    <a href="http://127.0.0.1:8000/tableadmin" class="brand-link">
        <img src="{{asset('AdminLTE-3.0.5/dist/img/AdminLTELogo.png')}}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset('AdminLTE-3.0.5/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Admin Corona-19</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
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
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/khususadmins" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Khusus Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/trash" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>data rahasia</p>
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
            <li class="nav-item has-treeview">
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
                </li>
                </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->