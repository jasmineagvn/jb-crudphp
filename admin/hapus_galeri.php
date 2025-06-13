<?php
require_once '../classes/Auth.php';
require_once '../config/database.php';

$auth = new Auth();
$auth->requireLogin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo "ID galeri tidak valid.";
        exit;
    }

    $galeri_id = (int) $_POST['id'];
    $upload_dir = '../uploads/galeri/';

    $database = new Database();
    $db = $database->getConnection();

    try {
        // Ambil data galeri
        $stmt = $db->prepare("SELECT * FROM galeri WHERE id = :id");
        $stmt->bindParam(':id', $galeri_id, PDO::PARAM_INT);
        $stmt->execute();
        $galeri = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$galeri) {
            echo "Galeri tidak ditemukan.";
            exit;
        }

        // Hapus file thumbnail jika ada
        if ($galeri['thumbnail'] && file_exists($upload_dir . $galeri['thumbnail'])) {
            unlink($upload_dir . $galeri['thumbnail']);
        }

        // Ambil semua foto tambahan galeri
        $stmtFoto = $db->prepare("SELECT * FROM galeri_foto WHERE galeri_id = :galeri_id");
        $stmtFoto->bindParam(':galeri_id', $galeri_id, PDO::PARAM_INT);
        $stmtFoto->execute();
        $fotos = $stmtFoto->fetchAll(PDO::FETCH_ASSOC);

        // Hapus file foto tambahan
        foreach ($fotos as $foto) {
            if ($foto['nama_file'] && file_exists($upload_dir . $foto['nama_file'])) {
                unlink($upload_dir . $foto['nama_file']);
            }
        }

        // Hapus data foto tambahan dari database
        $stmtDeleteFoto = $db->prepare("DELETE FROM galeri_foto WHERE galeri_id = :galeri_id");
        $stmtDeleteFoto->bindParam(':galeri_id', $galeri_id, PDO::PARAM_INT);
        $stmtDeleteFoto->execute();

        // Hapus data galeri dari database
        $stmtDeleteGaleri = $db->prepare("DELETE FROM galeri WHERE id = :id");
        $stmtDeleteGaleri->bindParam(':id', $galeri_id, PDO::PARAM_INT);
        $stmtDeleteGaleri->execute();

        header("Location: /janji-baik/admin/dashboard.php?message=hapus-berhasil");
        exit;

    } catch (PDOException $e) {
        echo "Terjadi kesalahan saat menghapus galeri: " . $e->getMessage();
        exit;
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Metode tidak diizinkan.";
    exit;
}
