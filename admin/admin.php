<?php
session_start();
$username1 = $_SESSION['Nama'];
?>
<?php include '../backend/koneksi.php' ?>
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
                    <a href="/Booking/index.php" class="nav-link active">Dashboard</a>
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
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <a href="listUser.php" class="nav-link active" style="display: block;">
                                        <i class="fas fa-users"></i>
                                    </a>
                                </span>
                                <?php
                                $sql = "SELECT COUNT(*) AS user_count FROM users";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $userCount = $row['user_count'];
                                echo '<div class="info-box-content">';
                                echo '<span class="info-box-text">USER</span>';
                                echo '<span class="info-box-number">' . $userCount . '</span>';
                                echo '</div>';
                                ?>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1">
                                    <a href="kos.php" class="nav-link active" style="display: block;">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </span>

                                <?php
                                $sql = "SELECT COUNT(*) AS boarding_count FROM kost";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $BoardingCount = $row['boarding_count'];
                                echo '<div class="info-box-content">';
                                echo '<span class="info-box-text">Boarding House</span>';
                                echo '<span class="info-box-number">' . $BoardingCount . '</span>';
                                echo '</div>';
                                ?>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1">
                                    <a href="transaksi.php" class="nav-link active" style="display: block;">
                                        <i class="fas fa-landmark"></i>
                                    </a>
                                </span>

                                <?php
                                $sql = "SELECT COUNT(*) AS transaksi_count FROM transaksi";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $TransaksiCount = $row['transaksi_count'];
                                echo '<div class="info-box-content">';
                                echo '<span class="info-box-text">TRANSACTION</span>';
                                echo '<span class="info-box-number">' . $TransaksiCount . '</span>';
                                echo '</div>';
                                ?>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
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