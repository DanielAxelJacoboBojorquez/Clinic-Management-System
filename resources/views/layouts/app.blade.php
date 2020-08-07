<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clinic Management System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ url('/home') }}" class="brand-link">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light"><b>Clinic Management</b></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                {{ Auth::user()->name }}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                   <i class="fas fa-sign-out-alt"></i>  Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            {{-- Dashboard --}}
                            <li class="nav-item">
                                <a href="/home" class="{{ Request::path() === '/home' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p><b>Dashboard</b></p>
                                </a>
                            </li>

                            {{-- Human Resources --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p><b>Human Resource</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- Employee --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-user nav-icon ml-4"></i>
                                            <p><b>Employee</b></p>
                                        </a>
                                    </li>
                                    {{-- Doctor --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-user-md nav-icon ml-4"></i>
                                            <p><b>Doctor</b></p>
                                        </a>
                                    </li>
                                    {{-- Settings --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cogs ml-4"></i>
                                                <p><b>Settings</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="far fa-user nav-icon ml-5"></i>
                                                    <p><b>Employee</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>

                            {{-- Doctor --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user-md"></i>
                                    <p><b>Doctor</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-user nav-icon ml-4"></i>
                                            <p><b>Employee</b></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Patient --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p><b>Patient</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- Patient List --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Patient List</b></p>
                                        </a>
                                    </li>
                                    {{-- Patient Document --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="far fa-file nav-icon ml-4"></i>
                                            <p><b>Patient Document</b></p>
                                        </a>
                                    </li>
                                    {{-- Patient Case History --}}
                                    <li class="nav-item">
                                        <a href="notas/archivadas"
                                            class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-book nav-icon ml-4"></i>
                                            <p>Patient Case History</b></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Appointment --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file-signature"></i>
                                    <p><b>Appointment</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- New Appointment --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-plus nav-icon ml-4"></i>
                                            <p><b>New Appointment</b></p>
                                        </a>
                                    </li>
                                    {{-- Appointment --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Appointment</b></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Prescription --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-stethoscope"></i>
                                    <p><b>Prescription</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- New Prescription --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-plus nav-icon ml-4"></i>
                                            <p><b>New Prescription</b></p>
                                        </a>
                                    </li>
                                    {{-- Prescription List --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Prescription List</b></p>
                                        </a>
                                    </li>
                                    {{-- Settings --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cogs ml-4"></i>
                                                <p><b>Settings</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="far fa-user nav-icon ml-5"></i>
                                                    <p><b>Employee</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>

                            {{-- Patient Service --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-plane"></i>
                                    <p><b>Patient Service</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- Service --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-ticket-alt nav-icon ml-4"></i>
                                            <p><b>Service</b></p>
                                        </a>
                                    </li>
                                    {{-- Service Package --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-ticket-alt nav-icon ml-4"></i>
                                            <p><b>Service Package</b></p>
                                        </a>
                                    </li>
                                    {{-- Service Category --}}
                                    <li class="nav-item">
                                        <a href="notas/archivadas"
                                            class="{{ Request::path() === 'notas/archivadas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-puzzle-piece nav-icon ml-4 "></i>
                                            <p><b>Service Category</b></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Pharmacy --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-medkit"></i>
                                    <p><b>Pharmacy</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- Pharmacy Accounts --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-credit-card nav-icon ml-4"></i>
                                            <p><b>Pharmacy Accounts</b></p>
                                        </a>
                                    </li>
                                    {{-- Supplier --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-male ml-4"></i>
                                                <p><b>Supplier</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="far fa-user nav-icon ml-5"></i>
                                                    <p><b>Employee</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Medicine --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-medkit ml-4"></i>
                                                <p><b>Medicine</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                {{-- New Medicine --}}
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-plus nav-icon ml-5"></i>
                                                    <p><b>New Medicine</b></p>
                                                    </a>
                                                </li>
                                                {{-- Medicine List --}}
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-th-list nav-icon ml-5"></i>
                                                    <p><b>Medicine List</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Purchase --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cube ml-4"></i>
                                                <p><b>Purchase</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-plus nav-icon ml-5"></i>
                                                    <p><b>New Medicine</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Customer --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-user ml-4"></i>
                                                <p><b>Customer</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-plus nav-icon ml-5"></i>
                                                    <p><b>New Medicine</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Medicine Sale --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-shopping-cart ml-4"></i>
                                                <p><b>Medicine Sale</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-plus nav-icon ml-5"></i>
                                                    <p><b>New Medicine</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Medicine Stock --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-chart-bar ml-4"></i>
                                                <p><b>Medicine Stock</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="fas fa-plus nav-icon ml-5"></i>
                                                    <p><b>New Medicine</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                    {{-- Settings --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cogs-md"></i>
                                                <p><b>Settings</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="far fa-user nav-icon ml-5"></i>
                                                    <p><b>Employee</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>

                            {{-- Accounts --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-money-bill-alt"></i>
                                    <p><b>Accounts</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- Pharmacy Accounts --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Accounts List</b></p>
                                        </a>
                                    </li>
                                    {{-- Capital/Drawing --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Capital/Drawing</b></p>
                                        </a>
                                    </li>
                                    {{-- Tax Payment --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Tax Payment</b></p>
                                        </a>
                                    </li>
                                    {{-- Expense --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Expense</b></p>
                                        </a>
                                    </li>
                                    {{-- Income --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Income</b></p>
                                        </a>
                                    </li>
                                    {{-- Doctor Payment --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Doctor Payment</b></p>
                                        </a>
                                    </li>
                                    {{-- Transaction Report --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-exchange-alt nav-icon ml-4"></i>
                                            <p><b>Transaction Report</b></p>
                                        </a>
                                    </li>
                                    {{-- Bill Report --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-exchange-alt nav-icon ml-4"></i>
                                            <p><b>Bill Report</b></p>
                                        </a>
                                    </li>
                                    {{-- Settings --}}
                                    <li class="nav-item">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon fas fa-cogs ml-4"></i>
                                                <p><b>Settings</b><i class="fas fa-angle-left right"></i></p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="notas/todas"
                                                    class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                                    <i class="far fa-user nav-icon ml-5"></i>
                                                    <p><b>Employee</b></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </li>
                                </ul>
                            </li>

                            {{-- Billing --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-money-bill-alt"></i>
                                    <p><b>Billing</b><i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    {{-- New Bill --}}
                                    <li class="nav-item">
                                        <a href="notas/todas"
                                            class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-plus nav-icon ml-4"></i>
                                            <p><b>New Bill</b></p>
                                        </a>
                                    </li>
                                    {{-- Bill List --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Bill List</b></p>
                                        </a>
                                    </li>
                                    {{-- Bill Collection --}}
                                    <li class="nav-item">
                                        <a href="notas/favoritas"
                                            class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                                            <i class="fas fa-th-list nav-icon ml-4"></i>
                                            <p><b>Bill Collection</b></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- User Access --}}
                            <li class="nav-item">
                                <a href="/home" class="{{ Request::path() === '/home' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p><b>User Access</b></p>
                                </a>
                            </li>

                            {{-- App Setting --}}
                            <li class="nav-item">
                                <a href="#" class="{{ Request::path() === '/home' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p><b>App Setting</b></p>
                                </a>
                            </li>

                            {{-- Users --}}
                            <li class="nav-item">
                                <a href="users"
                                    class="{{ Request::path() === 'users' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Users
                                        <?php use App\User; $users_count = User::all()->count(); ?>
                                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                    <strong>Clinic Management System 2020
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    </div>
</body>

</html>
