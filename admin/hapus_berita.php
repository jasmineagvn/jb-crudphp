<?php
require_once '../config/database.php';

$db = new Database();
$conn = $db->getConnection();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Ambil ID dari POST
$id = $_POST['id'] ?? null;

if (!$id) {
    die("ID tidak ditemukan.");
}

try {
    // Ambil data berita berdasarkan ID
    $stmt = $conn->prepare("SELECT image FROM berita WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        die("Data berita tidak ditemukan.");
    }

    // Hapus file gambar jika ada
    if (!empty($data['image'])) {
        $imagePath = '../' . $data['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // hapus file
        }
    }

    // Hapus data dari database
    $delete = $conn->prepare("DELETE FROM berita WHERE id = :id");
    $delete->execute([':id' => $id]);

    // Redirect ke halaman data berita
    header("Location: data_berita.php?hapus=berhasil");
    exit();

} catch (PDOException $e) {
    die("Terjadi kesalahan: " . $e->getMessage());
}
