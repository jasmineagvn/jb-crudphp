<?php
require_once '../classes/Auth.php';
require_once '../config/database.php';

$auth = new Auth();
$auth->requireLogin();

$database = new Database();
$db = $database->getConnection();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID galeri tidak valid.";
    exit;
}

$galeri_id = (int) $_GET['id'];

// Ambil data galeri berdasarkan id
try {
    $stmt = $db->prepare("SELECT * FROM galeri WHERE id = :id");
    $stmt->bindParam(':id', $galeri_id, PDO::PARAM_INT);
    $stmt->execute();
    $galeri = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$galeri) {
        echo "Galeri tidak ditemukan.";
        exit;
    }

    // Ambil foto-foto tambahan yang terkait
    $stmt2 = $db->prepare("SELECT * FROM galeri_foto WHERE galeri_id = :galeri_id");
    $stmt2->bindParam(':galeri_id', $galeri_id, PDO::PARAM_INT);
    $stmt2->execute();
    $fotoList = $stmt2->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Galeri - <?php echo htmlspecialchars($galeri['judul']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-[#01B4BB]"><?php echo htmlspecialchars($galeri['judul']); ?></h1>
        <a href="index.php" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Kembali</a>
    </div>
</header>

<!-- Main content -->
<main class="max-w-6xl mx-auto p-6">

    <!-- Thumbnail utama -->
    <?php if ($galeri['thumbnail'] && file_exists("../uploads/galeri/" . $galeri['thumbnail'])): ?>
        <img src="../uploads/galeri/<?php echo htmlspecialchars($galeri['thumbnail']); ?>" alt="Thumbnail" class="w-full max-h-96 object-cover rounded mb-6 shadow">
    <?php else: ?>
        <div class="w-full max-h-96 bg-gray-300 flex items-center justify-center text-gray-500 rounded mb-6">
            Tidak ada gambar thumbnail
        </div>
    <?php endif; ?>

    <!-- Deskripsi -->
    <div class="bg-white p-4 rounded shadow mb-8">
        <h2 class="text-lg font-semibold mb-2">Deskripsi</h2>
        <p class="text-gray-700 whitespace-pre-line"><?php echo nl2br(htmlspecialchars($galeri['deskripsi'])); ?></p>
    </div>

    <!-- Foto tambahan -->
    <section>
        <h2 class="text-lg font-semibold mb-4">Foto Tambahan</h2>
        <?php if (count($fotoList) === 0): ?>
            <p class="text-gray-600">Belum ada foto tambahan.</p>
        <?php else: ?>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <?php foreach ($fotoList as $foto): ?>
                    <?php if ($foto['nama_file'] && file_exists("../uploads/galeri/" . $foto['nama_file'])): ?>
                        <img src="../uploads/galeri/<?php echo htmlspecialchars($foto['nama_file']); ?>" alt="Foto tambahan" class="w-full h-40 object-cover rounded shadow">
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

</body>
</html>
