<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Cek apakah data dengan ID tersebut ada
    $check = $koneksi->prepare("SELECT * FROM relawan WHERE id = ?");
    $check->bind_param("i", $id);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        // Hapus data
        $delete = $koneksi->prepare("DELETE FROM relawan WHERE id = ?");
        $delete->bind_param("i", $id);
        if ($delete->execute()) {
            $_SESSION['pesan_sukses'] = "Data relawan berhasil dihapus.";
        } else {
            $_SESSION['pesan_error'] = "Gagal menghapus data relawan.";
        }
        $delete->close();
    } else {
        $_SESSION['pesan_error'] = "Data relawan tidak ditemukan.";
    }

    $check->close();
} else {
    $_SESSION['pesan_error'] = "Permintaan tidak valid.";
}

header("Location: data_relawan.php");
exit;
?>
