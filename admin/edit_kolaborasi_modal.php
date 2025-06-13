<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id            = intval($_POST['id']);
    $nama_lengkap  = trim($_POST['nama_lengkap']);
    $email         = trim($_POST['email']);
    $no_hp         = trim($_POST['no_hp']);

    // Validasi: ketiga field wajib diisi
    if ($nama_lengkap === '' || $email === '' || $no_hp === '') {
        $_SESSION['kolab_edit_success'] = "Semua field (Nama, Email, No. HP) harus diisi!";
        header("Location: data_kolaborasi.php");
        exit;
    }

    // Hanya update kolom nama_lengkap, email, dan no_hp
    $stmt = $koneksi->prepare("
        UPDATE kolaborasi 
        SET nama_lengkap = ?, email = ?, no_hp = ?
        WHERE id = ?
    ");
    // Tipe "sssi": 3x string, 1x integer (id)
    $stmt->bind_param(
        "sssi",
        $nama_lengkap,
        $email,
        $no_hp,
        $id
    );

    if ($stmt->execute()) {
        $_SESSION['kolab_edit_success'] = "Data kolaborasi berhasil diperbarui!";
    } else {
        $_SESSION['kolab_edit_success'] = "Gagal memperbarui data kolaborasi.";
    }
    $stmt->close();
} else {
    // Jika diakses tanpa POST atau tanpa id
    $_SESSION['kolab_edit_success'] = "Request edit tidak valid.";
}

header("Location: data_kolaborasi.php");
exit;
?>
