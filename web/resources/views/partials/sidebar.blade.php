<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("home") }}" class="brand-link">
        <img src="{{ asset("dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Travel & Pariwisata</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("dist/img/user3-128x128.jpg") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">
                    {{ucfirst(Auth::user()->name)}}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route("wisata.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Objek Wisata
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("kendaraan.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                           Alat Transportasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("transaksi.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                           Transaksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("pelanggan.index") }}" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                           Data Pelanggan
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
