<?php
include '../config/database.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// Cek apakah file thumbnail dan foto terupload
if (!isset($_FILES['thumbnail']) || !isset($_FILES['foto'])) {
    die("File belum dipilih.");
}

// Folder tujuan upload gambar
$upload_dir = '../uploads/galeri/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Upload thumbnail
$thumbnail_name = time() . '-' . basename($_FILES['thumbnail']['name']);
$thumbnail_path = $upload_dir . $thumbnail_name;
move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnail_path);

// Simpan data galeri
$conn = new mysqli("localhost", "root", "", "janjibaik_db");
$stmt = $conn->prepare("INSERT INTO galeri (judul, deskripsi, thumbnail) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $judul, $deskripsi, $thumbnail_name);
$stmt->execute();
$galeri_id = $stmt->insert_id;
$stmt->close();

// Upload banyak gambar tambahan
foreach ($_FILES['foto']['tmp_name'] as $index => $tmp_name) {
    $filename = time() . '-' . basename($_FILES['foto']['name'][$index]);
    $filepath = $upload_dir . $filename;

    if (move_uploaded_file($tmp_name, $filepath)) {
        $stmt = $conn->prepare("INSERT INTO galeri_foto (galeri_id, nama_file) VALUES (?, ?)");
        $stmt->bind_param("is", $galeri_id, $filename);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();

echo "<script>alert('Galeri berhasil ditambahkan!'); window.location='../admin/dashboard.php';</script>";
?>
