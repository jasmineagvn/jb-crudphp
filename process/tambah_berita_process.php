<?php
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];

    // Upload gambar
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = '../uploads/berita/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $imageName = uniqid() . '-' . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = 'uploads/berita/' . $imageName; // untuk ditampilkan ke user
        } else {
            die("Upload gambar gagal.");
        }
    }

    $db = new Database();
    $conn = $db->getConnection();

    $sql = "INSERT INTO berita (title, description, url, image, created_at) VALUES (:title, :description, :url, :image, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':url' => $url,
        ':image' => $imagePath
    ]);

    // Redirect setelah berhasil
    header('Location: ../admin/data_berita.php?status=success');
    exit();
} else {
    die("Akses tidak valid.");
}
