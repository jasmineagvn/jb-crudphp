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

$galeri_id  = (int) $_GET['id'];
$upload_dir = '../uploads/galeri/';

// Ambil data galeri
try {
    $stmt = $db->prepare("SELECT * FROM galeri WHERE id = :id");
    $stmt->bindParam(':id', $galeri_id, PDO::PARAM_INT);
    $stmt->execute();
    $galeri = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$galeri) {
        echo "Galeri tidak ditemukan.";
        exit;
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
    exit;
}

// Proses simpan perubahan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul     = $_POST['judul'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';

    // Tangani upload thumbnail baru
    if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) {
        $thumbnail_name = time() . '-' . basename($_FILES['thumbnail']['name']);
        $thumbnail_path = $upload_dir . $thumbnail_name;
        if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $thumbnail_path)) {
            if ($galeri['thumbnail'] && file_exists($upload_dir . $galeri['thumbnail'])) {
                unlink($upload_dir . $galeri['thumbnail']);
            }
        } else {
            $thumbnail_name = $galeri['thumbnail'];
        }
    } else {
        $thumbnail_name = $galeri['thumbnail'];
    }

    try {
        // Update galeri
        $stmt = $db->prepare("
            UPDATE galeri 
            SET judul = :judul, deskripsi = :deskripsi, thumbnail = :thumbnail 
            WHERE id = :id
        ");
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':thumbnail', $thumbnail_name);
        $stmt->bindParam(':id', $galeri_id, PDO::PARAM_INT);
        $stmt->execute();

        // Tambah foto tambahan jika ada
        if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'][0])) {
            foreach ($_FILES['foto']['tmp_name'] as $index => $tmp_name) {
                $filename = time() . '-' . basename($_FILES['foto']['name'][$index]);
                $filepath = $upload_dir . $filename;
                if (move_uploaded_file($tmp_name, $filepath)) {
                    $stmtFoto = $db->prepare("
                        INSERT INTO galeri_foto (galeri_id, nama_file) 
                        VALUES (:galeri_id, :nama_file)
                    ");
                    $stmtFoto->bindParam(':galeri_id', $galeri_id, PDO::PARAM_INT);
                    $stmtFoto->bindParam(':nama_file', $filename);
                    $stmtFoto->execute();
                }
            }
        }

        // Set pesan sukses untuk SweetAlert2
        $_SESSION['success_msg'] = "Galeri berhasil diperbarui!";
        header("Location: edit_galeri.php?id=" . $galeri_id);
        exit;
    } catch (PDOException $e) {
        echo "Terjadi kesalahan saat memperbarui galeri: " . $e->getMessage();
        exit;
    }
}

// Ambil foto tambahan untuk galeri ini
$stmtFotos = $db->prepare("SELECT * FROM galeri_foto WHERE galeri_id = :galeri_id");
$stmtFotos->bindParam(':galeri_id', $galeri_id, PDO::PARAM_INT);
$stmtFotos->execute();
$fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Galeri - <?= htmlspecialchars($galeri['judul']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<header class="bg-white border-b shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-[#01B4BB]">✏️ Edit Galeri</h1>
        <a href="/janji-baik/admin/data_galeri.php" 
           class="px-4 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-md transition">
           ← Kembali
        </a>
    </div>
</header>

<main class="max-w-4xl mx-auto mt-8 px-4">
    <!-- Tampilkan SweetAlert2 jika ada pesan sukses -->
    <?php if (isset($_SESSION['success_msg'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
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
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label for="judul" class="block mb-1 font-medium">Judul Galeri</label>
                <input type="text" id="judul" name="judul" 
                       value="<?= htmlspecialchars($galeri['judul']); ?>" required
                       class="w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm px-4 py-2" />
            </div>
            <div>
                <label for="deskripsi" class="block mb-1 font-medium">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required
                          class="w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm px-4 py-2"><?= htmlspecialchars($galeri['deskripsi']); ?></textarea>
            </div>

            <div>
                <label class="block mb-1 font-medium">Thumbnail Saat Ini</label>
                <?php if ($galeri['thumbnail'] && file_exists($upload_dir . $galeri['thumbnail'])): ?>
                    <img src="<?= $upload_dir . htmlspecialchars($galeri['thumbnail']); ?>"
                         class="w-40 h-40 object-cover rounded-lg border mb-2" alt="Thumbnail">
                <?php else: ?>
                    <div class="w-40 h-40 bg-gray-200 flex items-center justify-center text-sm text-gray-500 rounded-lg border mb-2">
                        Tidak ada thumbnail
                    </div>
                <?php endif; ?>
            </div>

            <div>
                <label for="thumbnail" class="block mb-1 font-medium">Ganti Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" accept="image/*"
                       class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer bg-white 
                              file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-blue-600 file:text-white 
                              hover:file:bg-blue-700 transition" />
            </div>

            <div>
                <label for="foto" class="block mb-1 font-medium">Tambah Foto Tambahan</label>
                <input type="file" id="foto" name="foto[]" accept="image/*" multiple
                       class="block w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer bg-white 
                              file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-green-600 file:text-white 
                              hover:file:bg-green-700 transition" />
            </div>

            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition">
                    💾 Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <?php if (count($fotos) > 0): ?>
    <section class="mt-10">
        <h2 class="text-lg font-semibold mb-4 text-gray-700">🖼️ Foto Galeri</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($fotos as $foto): ?>
                <div class="relative group rounded-md overflow-hidden shadow hover:shadow-lg transition">
                    <img src="<?= $upload_dir . htmlspecialchars($foto['nama_file']); ?>"
                         class="w-full h-40 object-cover" alt="Foto">

                    <!-- Form hapus foto dengan SweetAlert2 -->
                    <form class="hapus-foto-form absolute top-2 right-2" action="hapus_foto.php" method="POST">
                        <input type="hidden" name="id" value="<?= $foto['id']; ?>">
                        <input type="hidden" name="galeri_id" value="<?= $galeri_id; ?>">
                        <button type="submit"
                                class="bg-red-600 text-white text-xs px-2 py-1 rounded-md hover:bg-red-700 shadow-sm">
                            ✖ Hapus
                        </button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>
</main>

<script>
// SweetAlert2 konfirmasi hapus foto
document.querySelectorAll('.hapus-foto-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin menghapus foto ini?',
            text: "Foto yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e3342f',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>

</body>
</html>
