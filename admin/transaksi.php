<?php
session_start();
$username1 = $_SESSION['Nama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
                    <a href="/Booking/index.php" class="nav-link active">Transaction</a>
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

                <!-- Default box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date">Start Date:</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_date">End Date:</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form><br>
                        <div class="table-responsive">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 15%">ID Tagihan</th>
                                        <th style="width: 15%">ID Booking</th>
                                        <th style="width: 15%">Tanggal Transaksi</th>
                                        <th style="width: 15%">Nama Penyewa</th>
                                        <th style="width: 15%">Nama Kos</th>
                                        <th style="width: 15%">Nama Pemilik Kost</th>
                                        <th style="width: 10%" class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../backend/koneksi.php';

                                    // Check if the form is submitted
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        // Get the start date and end date from the form
                                        $start_date = $_POST['start_date'];
                                        $end_date = $_POST['end_date'];

                                        // Query the database with the date range filter
                                        $sql = "SELECT t.*, k.nama_pemilik, tb.status, t.tanggalmasuk
            FROM transaksi t
            JOIN kost k ON t.namakost = k.nama_kost
            LEFT JOIN tagihan tb ON t.notagihan = tb.notagihan
            WHERE tanggalmasuk BETWEEN '$start_date' AND '$end_date'";
                                        $result = $conn->query($sql);
                                    } else {
                                        $sql = "SELECT t.*, k.nama_pemilik, tb.status, t.tanggalmasuk
            FROM transaksi t
            JOIN kost k ON t.namakost = k.nama_kost
            LEFT JOIN tagihan tb ON t.notagihan = tb.notagihan";
                                        $result = $conn->query($sql);
                                    }

                                    if ($result->num_rows > 0) {
                                        $no = 1; // Move the initialization of $no outside the loop
                                        while ($row = $result->fetch_assoc()) {
                                            $IdTagihan = $row['notagihan'];
                                            $IdBooking = $row['notagihan'];
                                            $tanggalTransaksi = $row['tanggalmasuk'];
                                            $NamaPenyewa = $row['namalengkap'];
                                            $NamaKos = $row['namakost'];
                                            $NamaPemilik = $row['nama_pemilik'];
                                            $status = $row['status'];
                                    ?>
                                            <tr>
                                                <td id="noData"><?php echo $no++; ?></td>
                                                <td id="idTagihanData"><?php echo $IdTagihan; ?></td>
                                                <td id="idBookingData"><?php echo $IdBooking; ?></td>
                                                <td id="TanggalTransaksi"><?php echo $tanggalTransaksi; ?></td>
                                                <td id="namaPenyewaData"><?php echo $NamaPenyewa; ?></td>
                                                <td id="namaKos"><?php echo $NamaKos; ?></td>
                                                <td id="namaPemilikKos"><?php echo $NamaPemilik; ?></td>
                                                <td class="project-state text-center">
                                                    <?php
                                                    if ($status == 'Pending') {
                                                        echo '<span class="badge badge-warning">Pending</span>';
                                                    } elseif ($status == 'Belum Bayar') {
                                                        echo '<span class="badge badge-danger">Belum Bayar</span>';
                                                    } elseif ($status == 'Lunas') {
                                                        echo '<span class="badge badge-success">Lunas</span>';
                                                    } else {
                                                        echo '<span class="badge badge-secondary">Tidak Diketahui</span>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No data found.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

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