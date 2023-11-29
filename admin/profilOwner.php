<?php
session_start();
$username1 = $_SESSION['Nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble img-circle" src="img/Boarding.png" alt="AdminLTELogo" height="100" width="100">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/Booking/index.php" class="nav-link active">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="img/Boarding.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light"><?php echo $username1; ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="admin.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="listUser.php" class="nav-link active">
                                <i class="nav-icon fa fa-list-ul"></i>
                                <p>
                                    List User
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="kos.php" class="nav-link active">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>
                                    Kost
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="transaksi.php" class="nav-link active">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Transaction
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link active">
                                <i class="nav-icon fas fa fa-times"></i>
                                <p>
                                    Exit
                                </p>
                            </a>
                        </li>
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
                            <h1 class="m-0">Profil Owner</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <button class="btn btn-primary" href="listOwner.php" onclick="window.history.back()">Kembali</button>
                            </ol>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <a data-toggle="modal" data-target="#profilePictureModal">
                                            <img class="profile-user-img img-fluid img-circle" src="img/profil.jpg" alt="User profile picture">
                                        </a>

                                        <!-- Modal for displaying the larger image -->
                                        <div class="modal fade" id="profilePictureModal" tabindex="-1" role="dialog" aria-labelledby="profilePictureModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="img/profil.jpg" alt="User profile picture" style="max-width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="profile-username text-center">Jhoni</h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Call US</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa fa-phone mr-1"></i> No.Telepon</strong>
                                    <p class="text-muted">
                                        +12345678
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>
                                    <p class="text-muted">Batusangkar, Lima Kaum</p>
                                    <hr>
                                    <strong><i class="fas fa fa-envelope mr-1"></i>Email</strong>
                                    <p class="text-muted">abc@gmail.com</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header p-2">
                                    <h5>Deskripsi</h5>
                                </div><!-- /.card-header -->
                                <img src="img/kos4.jpg" class="card-img-top" />
                                <div class="card-body">
                                    <h5>Simple Room Name</h5>
                                    <h6 class="mb-4">Rp.250.000/BULAN</h6>
                                    <div class="features mb-4">
                                        <h6 class="mb-1">Tipe Kamar</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            3 x 3 Meter
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            2 orang
                                        </span>
                                    </div>
                                    <div class="facilities mb-4">
                                        <h6 class="mb-1">Fasilitas Kamar</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            Listrik
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            K.mandi Dalam
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            Tempat Tidur
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            Lemari
                                        </span>
                                    </div>
                                    <div class="guests mb-4">
                                        <h6 class="mb-1">Fasilitas Umum</h6>
                                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                                            WIFI
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <h6 class="text-center bg-dark text-white p-3 m-0">
            Designed and Developed by DODY SAHENDRA WIJAYA
        </h6>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>


    <script>
        function validateNumber(event) {
            var input = event.target.value;
            var onlyNumbers = /^\d+$/;

            if (!input.match(onlyNumbers)) {
                event.target.value = input.replace(/[^0-9]/g, '');
            }
        }
    </script>




    <script>
        function checkRoomType() {
            var selectElement = document.getElementById("exampleInputRoomType");
            var customRoomSize = document.getElementById("customRoomSize");

            if (selectElement.value === "custom") {
                customRoomSize.style.display = "block";
            } else {
                customRoomSize.style.display = "none";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showPaymentPopup() {
            const qrCodeUrl = 'img/QR.jpg'; // Ganti dengan URL QR kode Anda
            const qrCodeHtml = '<img src="' + qrCodeUrl + '" alt="QR Code" style="max-width: 300px; height: auto;">';


            Swal.fire({
                icon: 'info',
                title: 'Biaya register',
                html: 'Biaya register sebesar Rp.25.000 akan ditagihkan.<br><br>' + qrCodeHtml,
                confirmButtonText: 'OK',
                showCancelButton: true,
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    showSuccessPopup();
                }
            });
        }

        function showSuccessPopup() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil register',
                text: 'Terima kasih! Anda telah berhasil melakukan registrasi.',
            });
        }
    </script>

</body>

</html>