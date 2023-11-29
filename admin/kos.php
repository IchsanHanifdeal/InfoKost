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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <a href="/Booking/index.php" class="nav-link active">Kost</a>
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
                        <div class="table-responsive">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 1%">No</th>
                                        <th style="width: 20%">Nama KOS</th>
                                        <th style="width: 20%">Pemilik</th>
                                        <th>Jumlah Kamar</th>
                                        <th>Kota</th>
                                        <th style="width: 20%" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                include '../backend/koneksi.php';
                                $query = "SELECT k.id_kost, k.nama_kost, k.nama_pemilik, SUM(km.jumlah_kamar) AS total_jumlah, k.kota
                                FROM kost k
                                LEFT JOIN kamar km ON k.id_kost = km.id_kost
                                GROUP BY k.id_kost, k.nama_kost, k.nama_pemilik, k.kota;";

                                $result = $conn->query($query);
                                if ($result->num_rows > 0) {
                                    $no = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $namaKost = $row['nama_kost'];
                                        $pemilik = $row['nama_pemilik'];
                                        $jumlahKamar = $row['total_jumlah'];
                                        $kota = $row['kota'];
                                ?>
                                        <tbody>
                                            <tr>
                                                <td id="idData"><?php echo $no; ?></td>
                                                <td id="namaKosData"><?php echo $namaKost; ?></td>
                                                <td id="pemilikData"><?php echo $pemilik; ?></td>
                                                <td id="jumlahKamarData"><?php echo $jumlahKamar; ?></td>
                                                <td id="kota"><?php echo $kota; ?></td>
                                                <td class="project-actions text-center">
                                                <td class="project-actions text-center">
                                                    <a href="#" onclick="confirmDelete(<?php echo $row['id_kost']; ?>)" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                                </td>
                                            </tr>
                                        </tbody>
                                <?php $no++;
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Tidak ada data kost.</td></tr>";
                                }
                                ?>
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
    <script>
        function confirmDelete(idKost) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data kos akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'hapusKost.php?id=' + idKost;
                }
            })
        }
    </script>
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