<?php
require_once '../config/database.php';
$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['galeri_id'])) {
    $id = (int) $_POST['id'];
    $galeri_id = (int) $_POST['galeri_id'];

    // Ambil nama file foto
    $stmt = $db->prepare("SELECT nama_file FROM galeri_foto WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $foto = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($foto) {
        $filePath = '../uploads/galeri/' . $foto['nama_file'];

        // Hapus file dari sistem
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Hapus dari database
        $delete = $db->prepare("DELETE FROM galeri_foto WHERE id = :id");
        $delete->bindParam(':id', $id, PDO::PARAM_INT);
        $delete->execute();
    }
}

header("Location: edit_galeri.php?id=" . urlencode($galeri_id));
exit;
