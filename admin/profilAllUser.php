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
                <span class="brand-text font-weight-light">Admin</span>
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
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <button class="btn btn-primary" href="listUser.php" onclick="window.history.back()">Kembali</button>
                            </ol>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- /.row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h5 class="card-title">Profile</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-footer">
                                    <div class="row">
                                        <?php
                                        include '../backend/koneksi.php';
                                        // Mendapatkan ID pengguna dari URL
                                        if (isset($_GET['id'])) {
                                            $userId = $_GET['id'];

                                            // Mengirim permintaan SQL untuk mengambil data pengguna berdasarkan ID
                                            $sql = "SELECT * FROM users WHERE id = $userId";
                                            $result = $conn->query($sql);

                                            // Memeriksa apakah ada data pengguna yang ditemukan
                                            if ($result->num_rows > 0) {
                                                $row = $result->fetch_assoc();

                                                $gambar = $row['Foto Profil'];
                                                $gambarUrl = '../' . $gambar;

                                                echo '<div class="col-sm-3 col-6">';
                                                echo '<a data-toggle="modal" data-target="#profilePictureModal">';
                                                echo '<img class="profile-user-img img-fluid" src="' . $gambarUrl . '" alt="User profile picture" style="width: 100%; height: auto;">';
                                                echo '</a>';

                                                // Menampilkan data pengguna dalam elemen-elemen HTML yang sesuai
                                                echo '<!-- Modal for displaying the larger image -->';
                                                echo '<div class="modal fade" id="profilePictureModal" tabindex="-1" role="dialog" aria-labelledby="profilePictureModalLabel" aria-hidden="true">';
                                                echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                                                echo '<div class="modal-content">';
                                                echo '<div class="modal-body">';
                                                echo '<img src="' . $gambarUrl . '" alt="User profile picture" style="max-width: 100%;">';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '<!-- /.col -->';
                                                echo '<div class="col-sm-4 col-6">';
                                                echo '<div class="row">';
                                                echo '<div class="col">Username:</div>';
                                                echo '<div class="col-sm-6">' . $row['Nama'] . '</div>';
                                                echo '</div>';
                                                echo '<div class="row">';
                                                echo '<div class="col">Nama Lengkap:</div>';
                                                echo '<div class="col-sm-6">' . $row['NamaLengkap'] . '</div>';
                                                echo '</div>';
                                                echo '<div class="row">';
                                                echo '<div class="col">Email:</div>';
                                                echo '<div class="col-sm-6">' . $row['Email'] . '</div>';
                                                echo '</div>';
                                                echo '<div class="row">';
                                                echo '<div class="col">Pekerjaan:</div>';
                                                echo '<div class="col-sm-6">' . $row['Pekerjaan'] . '</div>';
                                                echo '</div>';
                                                echo '<div class="row">';
                                                echo '<div class="col">Jenis Kelamin:</div>';
                                                echo '<div class="col-sm-6">' . $row['JenisKelamin'] . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                echo 'Tidak ada data pengguna yang ditemukan.';
                                            }
                                        } else {
                                            echo 'ID pengguna tidak ditemukan.';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
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

</body>

</html>