<?php
require_once '../classes/Auth.php';
$auth = new Auth();
$auth->requireLogin();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <section class="bg-white shadow-md rounded-lg p-6 max-w-2xl w-full">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Berita (JBonNews)</h2>

        <form action="../process/tambah_berita_process.php" method="POST" enctype="multipart/form-data" class="space-y-5">
            <!-- Judul -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Berita</label>
                <input type="text" id="title" name="title" required
                    class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none" />
            </div>

            <!-- Link -->
            <div>
                <label for="url" class="block text-sm font-medium text-gray-700 mb-1">Link Berita</label>
                <input type="url" id="url" name="url" required
                    class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none" />
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-teal-500 focus:outline-none"></textarea>
            </div>

            <!-- Gambar -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar Thumbnail</label>
                <input type="file" id="image" name="image" accept="image/*" required
                    class="w-full border border-gray-300 p-2 rounded-md
                    file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
                    file:text-sm file:font-semibold file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100" />
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-teal-600 hover:bg-teal-700 text-white py-3 px-6 rounded-md font-semibold transition duration-300">
                    Simpan Berita
                </button>
            </div>
        </form>
    </section>
</body>

</html>
