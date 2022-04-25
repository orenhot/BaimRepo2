<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Website PosBill.">
    <meta name="keywords" content="Website PosBill.">
    <meta name="author" content="POSBILL.">
    <title>POSBILL</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

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
                        <a class="dropdown-item" href="page-account-settings-account.html">
                            <i class="me-50" data-feather="settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="page-faq.html">
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
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Main Menu</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="mydashboard.php"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Email">Dashboard Saya</span></a>
                </li>
                <li class="nav-item"><a class="d-flex align-items-center" href="kelola-invoice.php"><i data-feather="file-plus"></i><span class="menu-title text-truncate" data-i18n="Email">Kelola Invoice</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Laporan</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="kinerja-piutang.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Kinerja Piutang</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="mitra-macet.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Invoice Jatuh Tempo</span></a>
                        </li>
                        <li class="active"><a class="d-flex align-items-center" href="profil.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Profil Mitra</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="pembayaran.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Pembayaran</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="create-user.php"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Chat">Create Akun Mitra</span></a>
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
                <section class="app-user-view-connections">
                    <div class="row">
                        <!-- User Sidebar -->
                        <div class="row match-height">
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <!-- User Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-avatar-section">
                                            <div class="d-flex align-items-center flex-column">
                                                <div class="user-info text-center">
                                                    <h4>PT. Telkom Indonesia</h4>
                                                    <span class="badge bg-light-secondary">Telekomunikasi</span>
                                                </div>
                                            </div>
                                        </div><br>
                                        <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                        <div class="info-container">
                                            <ul class="list-unstyled">
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Username:</span>
                                                    <span>violet.dev</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Billing Email:</span>
                                                    <span>vafgot@vultukir.org</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Status:</span>
                                                    <span class="badge bg-light-success">Active</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Bidang:</span>
                                                    <span>Telekomunikasi</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Tax ID:</span>
                                                    <span>Tax-8965</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Contact:</span>
                                                    <span>+62 (609) 933-44-22</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">No. PKS:</span>
                                                    <span>POS/S123P/2022</span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Country:</span>
                                                    <span>Indonesia</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /User Card -->
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <!-- User Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="user-avatar-section">
                                            <div class="d-flex align-items-center flex-column">
                                                <div class="user-info text-center">
                                                    <h4>Transaksi</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around my-2 pt-75">
                                            <div class="d-flex align-items-start me-2">
                                                <span class="badge bg-light-primary p-75 rounded">
                                                    <i data-feather="dollar-sign" class="font-medium-2"></i>
                                                </span>
                                                <div class="ms-75">
                                                    <h4 class="mb-0">Tagihan</h4>
                                                    <h3>Rp. 18.980.920</h3>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start">
                                                <span class="badge bg-light-primary p-75 rounded">
                                                    <i data-feather="briefcase" class="font-medium-2"></i>
                                                </span>
                                                <div class="ms-75">
                                                    <h4 class="mb-0">Aging</h4>
                                                    <h3>65 hari</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /User Card -->
                                <!-- Plan Card -->
                                <div class="card border-primary">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h5 style="color:white">Status Kerja Sama</h5>
                                        </div><br>
                                        <ul class="ps-1 mb-2">
                                            <li class="mb-50">Mitra berisiko tinggi</li>
                                            <li class="mb-50">Transaksi tinggi</li>
                                            <li>Kerja sama jangka panjang</li>
                                        </ul>
                                        <div class="d-grid w-100 mt-2">
                                            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                                                Dihentikan Sementara
                                            </button>
                                        </div>
                                        <div class="d-grid w-100 mt-2">
                                            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                                                Mitra Risiko Tinggi
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Plan Card -->
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-75">Invoice</h4>
                                    <p>Daftar transaksi invoice</p>

                                    <!-- Connections -->
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0">02 Mei 2022</p>
                                                <span>#MS-415646</span>
                                            </div>
                                            <div class="me-1">
                                                <span>Rp. 18.087.970</span>
                                            </div>
                                            <div class="me-1">
                                                <p class="fw-bolder mb-0"><i data-feather="file"></i> PDF</p>
                                            </div>  
                                        </div>
                                    </div>
                                    <!-- /Connections -->
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Content -->
                        <div class="row match-height">
                        <div class="col-xl-7 col-lg-7 col-md-7 order-0 order-md-1">
                            <!-- connection -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-75">Transaksi Terakhir</h4>
                                    <p>Daftar transaksi terakhir</p>

                                    <!-- Connections -->
                                    <div class="card card-transaction">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="transaction-item" style="background-color:rgba(62, 61, 62, 0.32);padding:3%; border-radius: 15px;">
                                                <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h4 class="transaction-title">Telkomsel Indonesia</h4>
                                                        <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        <h6 class="transaction-title">Email: <span style="color:coral">baimwong@gmail.com</span></h6>
                                                        <h6 class="transaction-title">NO.PKS: <span style="color:coral">POS/S123P/2021</span></h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h6 class="transaction-title">Jumlah Saldo</h6>
                                                        <h2 class="transaction-title">Rp. 400.768.990 
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                <i data-feather="arrow-up"></i>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="transaction-item" style="background-color:rgba(62, 61, 62, 0.32);padding:3%; border-radius: 15px;">
                                            <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h4 class="transaction-title">Sampoerna HM Tbk</h4>
                                                        <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        <h6 class="transaction-title">Email: <span style="color:coral">baimwong@gmail.com</span></h6>
                                                        <h6 class="transaction-title">NO.PKS: <span style="color:coral">POS/S123P/2021</span></h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h6 class="transaction-title">Jumlah Saldo</h6>
                                                        <h2 class="transaction-title">Rp. 220.680.900 
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                <i data-feather="arrow-up"></i>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="transaction-item" style="background-color:rgba(62, 61, 62, 0.32);padding:3%; border-radius: 15px;">
                                                <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h4 class="transaction-title">PT. Soman Indonesia</h4>
                                                        <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        <h6 class="transaction-title">Email: <span style="color:coral">baimwong@gmail.com</span></h6>
                                                        <h6 class="transaction-title">NO.PKS: <span style="color:coral">POS/S123P/2021</span></h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="transaction-percentage">
                                                        <h6 class="transaction-title">Jumlah Saldo</h6>
                                                        <h2 class="transaction-title">Rp. 157.600.100 
                                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                <i data-feather="arrow-up"></i>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar bg-light-primary rounded float-start">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- /Connections -->
                                </div>
                            </div>
                            <!--/ connection -->
                        </div>
                        <!--/ User Content -->
                        <!-- User Content -->
                        <div class="col-xl-5 col-lg-7 col-md-7 order-0 order-md-1">
                            <!-- connection -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-75">Connected accounts</h4>
                                    <p>Display content from your connected accounts on your site</p>

                                    <!-- Connections -->
                                    <div class="card card-transaction">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <div class="transaction-item" style="padding:3%; border-radius: 15px;">
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h4 class="transaction-title">Telkomsel Indonesia</h4>
                                                            <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h6 class="transaction-title">Jumlah Transaksi</h6>
                                                            <h2 class="transaction-title">1250
                                                                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                    <i data-feather="arrow-up"></i>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="transaction-item" style="padding:3%; border-radius: 15px;">
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h4 class="transaction-title">Samporna HM tbk</h4>
                                                            <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h6 class="transaction-title">Jumlah Transaksi</h6>
                                                            <h2 class="transaction-title">990 
                                                                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                    <i data-feather="arrow-up"></i>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="transaction-item" style="padding:3%; border-radius: 15px;">
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h4 class="transaction-title">PT. Soman Indonesia</h4>
                                                            <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h6 class="transaction-title">Jumlah Transaksi</h6>
                                                            <h2 class="transaction-title">768
                                                                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                    <i data-feather="arrow-up"></i>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="transaction-item" style="padding:3%; border-radius: 15px;">
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h4 class="transaction-title">United Tracktor</h4>
                                                            <h6 class="transaction-title">Perwakilan: <span style="color:coral">Baim Wong</span></h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="transaction-percentage">
                                                            <h6 class="transaction-title">Jumlah Transaksi</h6>
                                                            <h2 class="transaction-title">467 
                                                                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-success" disabled>
                                                                    <i data-feather="arrow-up"></i>
                                                                </button>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar bg-light-primary rounded float-start">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Connections -->
                                </div>
                            </div>
                            <!--/ connection -->
                        </div>
                        </div>
                        <!--/ User Content -->
                    </div>
                </section>
                <!-- Edit User Modal -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Edit User Information</h1>
                                    <p>Updating user details will receive a privacy audit.</p>
                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" value="Gertrude" data-msg="Please enter your first name" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" value="Barton" data-msg="Please enter your last name" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="modalEditUserName">Username</label>
                                        <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control" value="gertrude.dev" placeholder="john.doe.007" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">Billing Email:</label>
                                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="gertrude@gmail.com" placeholder="example@domain.com" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserStatus">Status</label>
                                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                            <option selected>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditTaxID">Tax ID</label>
                                        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="Tax-8894" value="Tax-8894" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserPhone">Contact</label>
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22" value="+1 (609) 933-44-22" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLanguage">Language</label>
                                        <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="french">French</option>
                                            <option value="german">German</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="hebrew">Hebrew</option>
                                            <option value="sanskrit">Sanskrit</option>
                                            <option value="hindi">Hindi</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserCountry">Country</label>
                                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select">
                                            <option value="">Select Value</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center mt-1">
                                            <div class="form-check form-switch form-check-primary">
                                                <input type="checkbox" class="form-check-input" id="customSwitch10" checked />
                                                <label class="form-check-label" for="customSwitch10">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="customSwitch10">Use as a billing address?</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->
                <!-- upgrade your plan Modal -->
                <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-upgrade-plan">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5 pb-2">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Upgrade Plan</h1>
                                    <p>Choose the best plan for user.</p>
                                </div>
                                <form id="upgradePlanForm" class="row pt-50" onsubmit="return false">
                                    <div class="col-sm-8">
                                        <label class="form-label" for="choosePlan">Choose Plan</label>
                                        <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                            <option selected>Choose Plan</option>
                                            <option value="standard">Standard - $99/month</option>
                                            <option value="exclusive">Exclusive - $249/month</option>
                                            <option value="Enterprise">Enterprise - $499/month</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 text-sm-end">
                                        <button type="submit" class="btn btn-primary mt-2">Upgrade</button>
                                    </div>
                                </form>
                            </div>
                            <hr />
                            <div class="modal-body px-5 pb-3">
                                <h6>User current plan is standard plan</h6>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-center me-1 mb-1">
                                        <sup class="h5 pricing-currency pt-1 text-primary">$</sup>
                                        <h1 class="fw-bolder display-4 mb-0 text-primary me-25">99</h1>
                                        <sub class="pricing-duration font-small-4 mt-auto mb-2">/month</sub>
                                    </div>
                                    <button class="btn btn-outline-danger cancel-subscription mb-1">Cancel Subscription</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ upgrade your plan Modal -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/modal-edit-user.js"></script>
    <script src="../app-assets/js/scripts/pages/app-user-view.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
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