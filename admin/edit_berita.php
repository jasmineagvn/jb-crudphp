<?php
session_start();
require_once '../config/database.php';

$db = new Database();
$conn = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];

    $stmt = $conn->prepare("SELECT * FROM berita WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $oldData = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$oldData) {
        die("Data tidak ditemukan.");
    }

    $imagePath = $oldData['image'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $uploadDir = '../uploads/berita/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (file_exists('../' . $oldData['image'])) {
            unlink('../' . $oldData['image']);
        }

        $imageName = uniqid() . '-' . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = 'uploads/berita/' . $imageName;
        } else {
            die("Upload gambar gagal.");
        }
    }

    $update = $conn->prepare("UPDATE berita SET title = :title, description = :description, url = :url, image = :image WHERE id = :id");
    $update->execute([
        ':title' => $title,
        ':description' => $description,
        ':url' => $url,
        ':image' => $imagePath,
        ':id' => $id
    ]);

    $_SESSION['success_msg'] = "Berita berhasil diperbarui!";
    header("Location: edit_berita.php?id=$id");
    exit();
} else {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM berita WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $berita = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$berita) {
        die("Berita tidak ditemukan.");
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<header class="bg-white border-b shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-[#01B4BB]">Edit Berita</h1>
        <a href="/janji-baik/admin/data_berita.php" 
           class="px-4 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-md transition">
           ← Kembali ke Data Berita
        </a>
    </div>
</header>

<main class="max-w-4xl mx-auto mt-8 px-4">
    <?php if (isset($_SESSION['success_msg'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '<?= addslashes($_SESSION['success_msg']) ?>',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
        <?php unset($_SESSION['success_msg']); ?>
    <?php endif; ?>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <form method="POST" enctype="multipart/form-data" class="space-y-6">
            <input type="hidden" name="id" value="<?= $berita['id'] ?>">

            <div>
                <label for="title" class="block mb-1 font-medium">Judul</label>
                <input type="text" name="title" id="title"
                       value="<?= htmlspecialchars($berita['title']) ?>" required
                       class="w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm px-4 py-2" />
            </div>

            <div>
                <label for="description" class="block mb-1 font-medium">Deskripsi</label>
                <textarea name="description" id="description" rows="4" required
                          class="w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm px-4 py-2"><?= htmlspecialchars($berita['description']) ?></textarea>
            </div>

            <div>
                <label for="url" class="block mb-1 font-medium">URL Berita</label>
                <input type="url" name="url" id="url"
                       value="<?= htmlspecialchars($berita['url']) ?>" required
                       class="w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm px-4 py-2" />
            </div>

            <div>
                <label class="block mb-1 font-medium">Gambar Saat Ini</label>
                <?php if ($berita['image'] && file_exists('../' . $berita['image'])): ?>
                    <img src="../<?= htmlspecialchars($berita['image']) ?>" class="w-40 h-32 object-cover rounded-lg border mb-2" alt="Gambar Berita">
                <?php else: ?>
                    <div class="w-40 h-32 bg-gray-200 flex items-center justify-center text-sm text-gray-500 rounded-lg border mb-2">
                        Tidak ada gambar
                    </div>
                <?php endif; ?>
            </div>

            <div>
                <label for="image" class="block mb-1 font-medium">Ganti Gambar (opsional)</label>
                <input type="file" name="image" id="image" accept="image/*"
                       class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer bg-white 
                              file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-[#01B4BB] file:text-white 
                              hover:file:bg-indigo-700 transition" />
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-[#01B4BB] text-white font-medium rounded-md hover:bg-blue-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</main>

</body>
</html>