<?php
require_once '../classes/Auth.php';

$auth = new Auth();
$auth->requireLogin();

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Tambah Galeri Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <section class="bg-white shadow-md rounded-lg p-6 max-w-2xl w-full">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Galeri Baru</h2>

        <form action="../process/galeri_process.php" method="POST" enctype="multipart/form-data" class="space-y-5">
            <!-- Judul Galeri -->
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Galeri</label>
                <input type="text" id="judul" name="judul" required
                    class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Galeri</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required
                    class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <!-- Thumbnail -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Thumbnail (Gambar Utama)</label>
                <input type="file" name="thumbnail" accept="image/*" required
                    class="w-full border border-gray-300 p-2 rounded-md
          file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
          file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>

            <!-- Upload Banyak Gambar -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Gambar Tambahan</label>
                <input type="file" name="foto[]" multiple accept="image/*" required
                    class="w-full border border-gray-300 p-2 rounded-md
          file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
          file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-md font-semibold transition duration-300">
                    Simpan Galeri
                </button>
            </div>
        </form>
    </section>
</body>

</html>
