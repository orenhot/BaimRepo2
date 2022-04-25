<!DOCTYPE html>
<html class="" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Website PosBill.">
    <meta name="keywords" content="Website PosBill.">
    <meta name="author" content="POSBILL.">
    <title>Login</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components_login.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-menu-modern blank-page navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                                <!-- <img class="img-fluid" src="app-assets/images/bg-01_1.png"/> -->
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="col-lg-3 align-items-center px-3 p-lg-3">
                            <div style="padding-top: 20%;"></div>
                            <div style="background-color: aliceblue; color:darkslategray;" class="card mb-1 col-12">
                                <div class="card-body mb-1">
                                    <center>
                                    <p style="color:black;font-size: 2.5em;font-weight: 600;padding-top: 5%;" class="mb-3">POSBILL</p>
                                    <h4 style="color: darkslategray;" class="card-title mb-2">Selamat Datang 👋</h4>
                                    <p class="card-text mb-3">Silahkan masukan username dan password <br>anda disini</p>
                                    </center>
                                    <form class="auth-login-form mt-2" action="index.html" method="POST">
                                        <div class="mb-1">
                                            <label for="login-email" style="color: darkslategray;" class="form-label">EMAIL</label>
                                            <input type="text" class="form-control form-login" id="login-email" name="login-email" placeholder="kampar@posindonesia.co.id" aria-describedby="login-email" tabindex="1" autofocus />
                                        </div>
    
                                        <div class="mb-1">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" style="color: darkslategray;" for="login-password">PASSWORD</label>
                                                <a href="auth-forgot-password-basic.html">
                                                    <small style="color:black">Lupa Password?</small>
                                                </a>
                                            </div>
                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input type="password" class="form-control form-control-merge" id="login-password" name="login-password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                                                <label style="color: darkslategray;" class="form-check-label" for="remember-me"> Remember Me </label>
                                            </div>
                                        </div>
                                        <!-- <button style="background-color: deeppink;color:white" class="btn w-100" tabindex="4">Sign in</button> -->
                                        <a href="html/main-dashboard.php" style="background-color: deeppink;color:white" class="btn w-100" tabindex="4">Sign in</a>
                                    </form>
    
                                    <p class="text-center mt-2">
                                        <span>Belum memiliki akun?</span>
                                        <a href="auth-register-basic.html">
                                            <span>Klik disini</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/auth-login.js"></script>
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