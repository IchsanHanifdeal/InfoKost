<?php
    include '../backend/koneksi.php';

    if (isset($_GET['id'])) {
        $idKost = $_GET['id'];
        
        // Hapus terlebih dahulu data kamar yang terkait dengan kost ini
        $query_delete_kamar = "DELETE FROM kamar WHERE id_kost = '$idKost'";
        $result_delete_kamar = $conn->query($query_delete_kamar);
        
        // Setelah data kamar dihapus, hapus data kost
        $query_delete_kost = "DELETE FROM kost WHERE id_kost = '$idKost'";
        $result_delete_kost = $conn->query($query_delete_kost);
        
        if ($result_delete_kost) {
            // Jika penghapusan berhasil, kembalikan pengguna ke halaman kos.php
            header('Location: kos.php');
        } else {
            // Jika terjadi kesalahan, tampilkan pesan error
            echo "Error: " . $conn->error;
        }
    } else {
        // Jika parameter 'id' tidak ada, kembalikan pengguna ke halaman kos.php
        header('Location: kos.php');
    }

    $conn->close();
?>