<div class="dashboard-main-wrapper">
    {{-- Top Nav --}}
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                {{-- <ul class="container-fluid"> --}}
                <div class="container-fluid">
                    <img class="img-fluid ps-3" src="{{ asset('img/gv-text-dark.png') }}" alt=""
                        style="height: 24px">
                </div>

                {{-- {{ $user->nama_lengkap }} --}}

                {{-- </ul> --}}
                <ul class="navbar-nav ml-auto navbar-right-top">

                    {{--  <a class="nav-link" href="">{{ $user->nama_lengkap }}</a> --}}

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{ asset('img/item-sample2.png') }}" alt=""
                                class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                            aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">{{ $user->nama_lengkap }}</h5>
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- Sidebar --}}
    <div class="nav-left-sidebar sidebar-light">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('user') ? 'active' : '' }}" href="#"
                                data-toggle="" aria-expanded="false" data-target="#submenu-1"
                                aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard
                                <span class="badge badge-success"> 6 </span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('portofolio') ? 'active' : '' }}" href="#"
                                data-toggle="" aria-expanded="false" data-target="#submenu-2"
                                aria-controls="submenu-2"><i class="fas fa-fw fa-chart-pie"></i>Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Transaksi') ? 'active' : '' }}" href="#"
                                data-toggle="" aria-expanded="false" data-target="#submenu-3"
                                aria-controls="submenu-3"><i class="bi bi-wallet-fill"></i>Transaksi</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::is('Pengaturan') ? 'active' : '' }}" href="#"
                                data-toggle="" aria-expanded="false" data-target="#submenu-4"
                                aria-controls="submenu-4"><i class="bi bi-gear-fill"></i>Pengaturan</a>
                        </li>
                </div>
                </li>
                </ul>
        </div>
        </nav>
    </div>

</div>
