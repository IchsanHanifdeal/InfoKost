<?php
include '../backend/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $response = array(
                'status' => 'success',
                'message' => 'Pengguna berhasil dihapus'
            );
            echo '<script>';
            echo 'window.location.href = "listUser.php";';
            echo '</script>';
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus pengguna'
            );
        }
        $stmt->close();
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Data pengguna tidak lengkap'
        );
    }
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Metode request tidak valid'
    );
}

echo json_encode($response);
