<?php
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID siswa tidak ditemukan.");
}

// Hapus data siswa
$query = "DELETE FROM siswa WHERE id = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: data_siswa.php");
    exit;
} else {
    echo "Gagal menghapus data: " . $koneksi->error;
}
?>
