<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="<? $judul ?>" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <h1 class="text-blue "><a class=" text-success"><b> SELAMAT DATANG DI | WEBSITE PEMUDA BAPTIS</a></b>
                </h1>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">
                <!-- Navbar Search -->
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa fa-inbox"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="assets/dist/img/user1-128x128.jpg" alt="assets/User Avatar"
                                    class="assets/img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
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
                                <img src="assets/dist/img/user8-128x128.jpg" alt="assest/User Avatar"
                                    class="assets/img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
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
                                <img src="assets/dist/img/user3-128x128.jpg" alt="assets/User Avatar"
                                    class="assets/img-size-50 img-circle mr-3">
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
                        <span class="dropdown-header">15 Notifications</span>
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
                <!-- <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li> -->

                <!-- Nav Item - User Information -->
                <form class=" btn btn- btn-sm ">
                    <li class="nav-item dropdown no-arrow  ">
                        <a class="nav-link dropdown-toggle " href="home" id="userDropdown " role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>Admin</b></span>
                            <img class="img-profile rounded-circle col-100 mr-100 img-sm mr-2"
                                src="assets/dist/img/f.png">
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in "
                            aria-labelledby="userDropdown ">
                            <a class="dropdown-item  " href="admin">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400 "></i>
                                Profile
                            </a>
                            <div class="dropdown-divider "></div>
                            <!-- <a class="dropdown-item " href="">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Logout" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a> -->
                        </div>
                    </li>
                </form>
                <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar col-2 mr-2" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large col-2 mr-2"></i>
          </a>
        </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-8">
            <!-- Brand Logo -->

            <a href="<? $judul ?>" class="brand-link">

                <img src="assets/dist/img/avatar2.png" alt="avatar2.png" class="brand-image img-circle elevation 10 "
                    style="opacity: 200">

                <span class="brand-text font-weight-light"><b class="text-blue ">PEMUDA-BAPTIS</b></span>
            </a>




            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-2 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/dist/img/b.png" class="assets/img-circle elevation-2" alt="assets/User Image"
                            class="bg-bordered-image image-center">
                    </div>
                    <div class="info">
                        <a href="admin" class="d-block text-center mr-5"><b>Admin</b></a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2 pb-2 mb-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('home') ?>"
                                class="nav-link <?= $menu == 'dashboard' ?  'active' : ' ' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    <b>Dashboard</b>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?= $menu == 'masterdata' ?  'active' : ' ' ?>">
                            <a href="<?= base_url('Masterdata') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    <b>Master Data </b>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('Datapemuda') ?>"
                                        class="nav-link <?= $submenu == 'Data pemuda' ?  'active' : ' ' ?>">
                                        <i class="far fa-folder-open"></i>
                                        <p> <b> Data Pemuda </b> </p>
                                    </a>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Datagereja') ?>"
                                        class="nav-link <?= $submenu == 'Datagereja' ?  'active' : ' ' ?>">
                                        <i class="fa fa-church"></i>
                                        <p> <b> Data Gereja </b> </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Jadwalibadah') ?>"
                                        class="nav-link <?= $submenu == 'jadwalibadah' ?  'active' : ' ' ?>">
                                        <i class="far fa-calendar-check"></i>
                                        <p><b>Data Jadwal Ibadah </b></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Pengumuman') ?>"
                                        class="nav-link <?= $submenu == 'pengumuman' ?  'active' : ' ' ?>">
                                        <i class="fas fa-bullhorn"></i>
                                        <p><b> Data Pengumuman</b></p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Events') ?>"
                                        class="nav-link <?= $submenu == 'events' ?  'active' : ' ' ?>">
                                        <i class="far fa-calendar"></i>
                                        <p><b> Data Events</b></p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('pengurus') ?>"
                                        class="nav-link <?= $submenu == 'pengurus' ?  'active' : ' ' ?>">
                                        <i class="fas fa-user col-100 "></i>
                                        <p><b> Data Pengurus</b></p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url('gambar') ?>"
                                        class="nav-link <?= $submenu == 'gambar' ?  'active' : ' ' ?>">

                                        <i class="far fa-image"></i>
                                        <p><b> Data Galery</b></p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('User') ?>" class="nav-link <?= $menu == 'user' ?  'active' : ' ' ?>">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    <b> Data Users</b>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Logout') ?>"
                                class="nav-link<?= $menu == 'logout' ?  'active' : ' ' ?>">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw  text-white-400"></i>
                                <p>
                                    <b> Data Logout</b>
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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $judul ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= $judul ?>">Home</a></li>
                                <li class="breadcrumb-item active">Menu Utama</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.conten -->
                        <?php
            if ($page) {
              echo view($page);
            }
            ?>
                        <!-- /.end conten -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>@Copyright &copy; 2024 <a href="#"></a>Pemudabaptis *</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>