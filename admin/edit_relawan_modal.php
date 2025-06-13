<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Pastikan ada data POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id         = intval($_POST['id']);
    $nama       = trim($_POST['nama_lengkap']);
    $no_hp      = trim($_POST['no_hp']);

    // Validasi sederhana
    if ($nama === '' || $no_hp === '') {
        $_SESSION['edit_success'] = "Nama dan No. HP tidak boleh kosong!";
        header("Location: data_relawan.php");
        exit;
    }

    // Update di database
    $stmt = $koneksi->prepare("UPDATE relawan SET nama_lengkap = ?, no_hp = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nama, $no_hp, $id);
    if ($stmt->execute()) {
        $_SESSION['edit_success'] = "Data relawan berhasil diperbarui!";
    } else {
        $_SESSION['edit_success'] = "Gagal memperbarui data relawan.";
    }
    $stmt->close();
} else {
    // Jika diakses langsung tanpa POST atau tanpa id
    $_SESSION['edit_success'] = "Request edit tidak valid.";
}

header("Location: data_relawan.php");
exit;
?>
