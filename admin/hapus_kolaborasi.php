<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Pastikan ID tersedia dan valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Query hapus
    $hapus = $koneksi->query("DELETE FROM kolaborasi WHERE id = $id");

    if ($hapus) {
        $_SESSION['pesan_sukses'] = "Data kolaborasi berhasil dihapus.";
    } else {
        $_SESSION['pesan_error'] = "Gagal menghapus data.";
    }
} else {
    $_SESSION['pesan_error'] = "ID tidak valid.";
}

// Redirect kembali ke halaman utama
header("Location: data_kolaborasi.php");
exit();
