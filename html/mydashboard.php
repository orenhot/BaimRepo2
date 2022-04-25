<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Web Posbill.">
    <meta name="keywords" content="Web Posbill">
    <meta name="author" content="Kampar">
    <title>DASHBOARD POSBILL</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <a href=""></a>

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><span style="color: white;font-size: 1.5em">Dashboard KC Cimahi 40500</span> 
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Pembayaran oleh Shoppe Pte. Ltd</span></p><small class="notification-text"> Pembayaran telah dilakukan.</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Pembayaran oleh Lazada Group</span></p><small class="notification-text"> Pembayaran telah dilakukan.</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Invoice</span>&nbsp;diterima</p><small class="notification-text"> Invoice PT. Soman Indonesia membutuhkan approval</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Invoice</span>&nbsp;Jatuh Tempo</p><small class="notification-text"> Invoice PT. Indorama Utama telah habis</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Laporan bulan lalu tersedia</small>
                                    </div>
                                </div>
                            </a>
                            <a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Pembayaran</span>&nbsp;gagal</p><small class="notification-text"> Pembayaran dengan virtual account gagal</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Lihat semua</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Suciawaty Nurjanah</span><span class="user-status">Manajer Penjualan</span></div><span class="avatar"><img class="round" src="../app-assets/images/portrait/small/avatar-s-27.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="page-profile.html">
                            <i class="me-50" data-feather="user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="me-50" data-feather="settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="me-50" data-feather="help-circle"></i> FAQ
                        </a>
                        <a class="dropdown-item" href="../index.php">
                            <i class="me-50" data-feather="power"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="main-dashboard.php">
                    <h2 class="brand-text">POSBILL  </h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li><a class="d-flex align-items-center" href="main-dashboard.php"><i data-feather="home"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Overview</span></a>
                </li>
                <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Main Menu</span><i data-feather="more-horizontal"></i>
                </li>
                <li class="active"class="nav-item"><a class="d-flex align-items-center" href="mydashboard.php"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Email">Dashboard Saya</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="kelola-invoice.php"><i data-feather="file-plus"></i><span class="menu-title text-truncate" data-i18n="Email">Kelola Invoice</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Laporan</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="kinerja-piutang.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Kinerja Piutang</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="mitra-macet.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Invoice Jatuh Tempo</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="profil.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Profil Mitra</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="pembayaran.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Pembayaran</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="create-user.php"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Chat">Create Akun Mitra</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="halaman-mitra.php"><i data-feather="user-plus"></i><span class="menu-title text-truncate" data-i18n="Chat">Halaman Mitra</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Transaction Card -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">PYMHD SETAHUN</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="transaction-percentage">
                                                <h2 class="transaction-title">Rp. 200.768.990</h2>
                                                <small><span style="color:lime;font-weight:700;">+3.48%</span> &nbsp;&nbsp;Februari 2022</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">JUMLAH INVOICE</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="transaction-percentage">
                                                <h2 class="transaction-title">675</h2>
                                                <small><span style="color:lime;font-weight:700;">+5.20%</span> &nbsp;&nbsp;Februari 2022</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="file-text" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">JUMLAH MITRA</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="transaction-percentage">
                                                <h2 class="transaction-title">250</h2>
                                                <small><span style="color:crimson;font-weight:700;">-2.82%</span> &nbsp;&nbsp;Februari 2022</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="users" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->

                        <!-- Transaction Card -->
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">TOTAL SALDO</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="transaction-percentage">
                                                <h2 class="transaction-title">Rp. 173.000.986</h2>
                                                <small><span style="color:lime;font-weight:700;">+8.12%</span> &nbsp;&nbsp;Februari 2022</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Transaction Card -->
                    </div>

                    <div class="row match-height">
                        <div class="content-body">
                            <!-- ChartJS section start -->
                            <section id="chartjs-chart">
            
                                <!-- Line Chart Starts-->
                                <div class="row match-height">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <div>
                                                    <h4 class="card-title">Overview Piutang KC Cimahi Dalam Satu Tahun <span style="color: chartreuse;">&nbsp;<small>(+5) tahun 2021</small></span></h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                                                <div class="header-left">
                                                    <h4 class="card-title">Total Invoice Bulan Ini</h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <canvas class="bar-chart-ex chartjs" data-height="450"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Line Chart Ends-->
                            </section>
                            <!-- ChartJS section end -->
            
                        </div>
                    </div>

                    <div class="row match-height">
                        <!-- Revenue Report Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card" style="background: rgba(175, 2, 91, 0.1);">
                                <div class="card-header">
                                    <h4 class="card-title">DAFTAR TAGIHAN</h4>
                                    <button type="button" class="btn btn-primary btn-sm">view all</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mitra</th>
                                                <th>NO. PKS</th>
                                                <th>Batas Pembayaran</th>
                                                <th>Jumlah Pembayaran</th>
                                                <th>Status Invoice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>PT. Telkom Indonesia</td>
                                                <td>Regional 2</td>
                                                <td>1 April 2022</td>
                                                <td>Rp. 723.000.032</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Shoopee Pte. Ltd</td>
                                                <td>Regional 2</td>
                                                <td>7 April 2022</td>
                                                <td>Rp. 507.129.200</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lazada Group</td>
                                                <td>Regional 6</td>
                                                <td>2 April 2022</td>
                                                <td>Rp. 323.151.532</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>PT. Soman Indonesia</td>
                                                <td>Regional 3</td>
                                                <td>11 April 2022</td>
                                                <td>Rp. 223.560.000</td>
                                            </tr><tr>
                                                <td>5</td>
                                                <td>PT. Indorama Indonesia</td>
                                                <td>Regional 2</td>
                                                <td>15 April 2022</td>
                                                <td>Rp. 143.129.032</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->

                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">SISA PEMBAYARAN MITRA</h4>
                                    <button type="button" class="btn btn-primary btn-sm">view all</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Mitra</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PT. Telkom Indonesia</td>
                                                <td>
                                                    <p class="mb-50">50%</p>
                                                    <div class="progress progress-bar-success" style="height: 6px">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shopee Pte. Ltd</td>
                                                <td>
                                                    <p class="mb-50">75%</p>
                                                    <div class="progress progress-bar-success" style="height: 6px">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 75%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lazada Group</td>
                                                <td>
                                                    <p class="mb-50">20%</p>
                                                    <div class="progress progress-bar-success" style="height: 6px">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 20%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PT. Soman Indonesia</td>
                                                <td>
                                                    <p class="mb-50">90%</p>
                                                    <div class="progress progress-bar-success" style="height: 6px">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 90%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PT. Indorama Utama</td>
                                                <td>
                                                    <p class="mb-50">70%</p>
                                                    <div class="progress progress-bar-success" style="height: 6px">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">PEMBAYARAN TERLAMBAT</h4>
                                    <button type="button" class="btn btn-primary btn-sm">view all</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NAMA</th>
                                                <th>NO. PKS</th>
                                                <th>JUMLAH (JUTA)</th>
                                                <th>AGING</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PT. Telkom Indonesia</td>
                                                <td>POS/S469U/2021</td>
                                                <td>39</td>
                                                <td>69 hari</td>
                                            </tr>
                                            <tr>
                                                <td>Shopee Pte. Ltd</td>
                                                <td>POS/S470U/2021</td>
                                                <td>19</td>
                                                <td>35 hari</td>
                                            </tr>
                                            <tr>
                                                <td>Lazada Group</td>
                                                <td>POS/S471U/2021</td>
                                                <td>94</td>
                                                <td>118 hari</td>
                                            </tr>
                                            <tr>
                                                <td>PT. Soman Indonesia</td>
                                                <td>POS/S472U/2022</td>
                                                <td>20</td>
                                                <td>78 hari</td>
                                            </tr>
                                            <tr>
                                                <td>PT. Indorama Utama</td>
                                                <td>POS/S473U/2022</td>
                                                <td>59</td>
                                                <td>74 hari</td>
                                            </tr>
                                            <tr>
                                                <td>Dirjen Pajak</td>
                                                <td>POS/S474U/2022</td>
                                                <td>92</td>
                                                <td>60 hari</td>
                                            </tr>
                                            <tr>
                                                <td>Semen Gresik</td>
                                                <td>POS/S475U/2022</td>
                                                <td>119</td>
                                                <td>84 hari</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25" href="#" target="_blank">KAMPAR</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="../app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
    <!-- END: Page JS -->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/charts/chart-chartjs.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>