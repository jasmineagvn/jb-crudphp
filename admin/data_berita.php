<?php
require_once '../classes/Auth.php';
require_once '../config/database.php';

$auth = new Auth();
$auth->requireLogin();

$database = new Database();
$db = $database->getConnection();

// Ambil data berita
try {
    $stmt = $db->prepare("SELECT * FROM berita ORDER BY created_at DESC");
    $stmt->execute();
    $beritaList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $beritaList = [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Berita - JANJI BAIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="../assets/logo.png" alt="Logo" class="h-10 w-15 object-contain" />
            <span class="text-gray-400">|</span>
            <span class="text-gray-600">Berita</span>
        </div>
        <div class="flex space-x-2">
            <a href="dashboard.php"
               class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
               ← Kembali ke Dashboard
            </a>
            <a href="tambah_berita.php"
               class="px-4 py-2 bg-[#01B4BB] text-white rounded hover:bg-blue-700 transition">
               + Tambah Berita
            </a>
        </div>
    </div>
</header>

<!-- Main -->
<main class="max-w-6xl mx-auto p-6">
    <?php if (count($beritaList) === 0): ?>
        <p class="text-gray-600">Belum ada berita ditambahkan.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($beritaList as $berita): ?>
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden group">
                    <a href="<?= htmlspecialchars($berita['url']) ?>" target="_blank">
                        <?php if ($berita['image']): ?>
                            <img src="../<?= htmlspecialchars($berita['image']) ?>" alt="Thumbnail"
                                 class="w-full h-48 object-cover">
                        <?php else: ?>
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                                Tidak ada gambar
                            </div>
                        <?php endif; ?>
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 truncate">
                                <?= htmlspecialchars($berita['title']) ?>
                            </h2>
                            <p class="text-sm text-gray-500 truncate">
                                <?= htmlspecialchars($berita['description']) ?>
                            </p>
                            <p class="text-sm text-gray-400 mt-1">
                                <?= date('d M Y', strtotime($berita['created_at'])) ?>
                            </p>
                        </div>
                    </a>
                    <div class="flex justify-between items-center p-4 border-t">
                        <a href="edit_berita.php?id=<?= $berita['id'] ?>"
                           class="text-blue-600 text-sm hover:underline">
                           Edit
                        </a>
                        <form class="hapus-berita-form" action="hapus_berita.php" method="POST">
                            <input type="hidden" name="id" value="<?= $berita['id'] ?>">
                            <button type="submit"
                                    class="text-red-600 text-sm hover:underline focus:outline-none">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>

<!-- SweetAlert2 Script untuk Konfirmasi Hapus -->
<script>
  document.querySelectorAll('.hapus-berita-form').forEach(form => {
    form.addEventListener('submit', function (e) {
      if (!confirm("Yakin ingin menghapus berita ini?")) {
        e.preventDefault();
      }
    });
  });
</script>
</body>
</html>
