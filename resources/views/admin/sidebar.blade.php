<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SentrySafe | Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

</head>
<!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul  style="background-color: #F1F5FD" class="navbar-nav sidebar accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
               <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('landingpage.index') }}">
                    <img class="ms-n5" src="{{ asset('assets/img/logo.png') }}" width="100%" alt="SentrySafe Logo" />
                </a>


                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Layanan -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Layanan</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Servis</h6>
                            <a class="collapse-item" href="{{ route('admin.perlindunganindividu.show') }}">Perlindungan Individu</a>
                            <a class="collapse-item" href="{{ route('admin.perlindunganmikro.show') }}">Perlindungan Mikro</a>
                            <a class="collapse-item" href="{{ route('admin.perlindungansyariah.show') }}">Perlindungan Syariah</a>
                            <a class="collapse-item" href="{{ route('admin.perlindunganprestige.show') }}">Perlindungan Prestige</a>
                            <a class="collapse-item" href="{{ route('admin.solusikorporat.show') }}">Solusi Korporat</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Informasi -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Informasi</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('admin.produk.show') }}">Produk</a>
                        </div>
                    </div>
                </li>

            <!-- Nav Item - Informasi Pelanggan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Informasi Pelanggan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.penagihan.show') }}">Penagihan</a>
                        <a class="collapse-item" href="{{ route('admin.klaim.show') }}">Klaim</a>
                    </div>
                </div>
            </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landingpage.hubungikami') }}">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Hubungi</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
