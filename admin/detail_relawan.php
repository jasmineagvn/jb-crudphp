<?php
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$id = $_GET['id'];
$query = "SELECT * FROM relawan WHERE id = $id";
$result = $koneksi->query($query);
$relawan = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Relawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-700">Detail Relawan</h1>

        <!-- Data Pribadi -->
        <h2 class="text-xl font-semibold text-[#01B4BB] mt-6 mb-2">Data Pribadi</h2>
        <div class="grid grid-cols-2 gap-4 text-gray-700">
            <p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($relawan['nama_lengkap']); ?></p>
            <p><strong>Nama Panggilan:</strong> <?= htmlspecialchars($relawan['nama_panggilan']); ?></p>
            <p><strong>Tempat Lahir:</strong> <?= htmlspecialchars($relawan['tempat_lahir']); ?></p>
            <p><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($relawan['tanggal_lahir']); ?></p>
            <p><strong>No. HP:</strong> <?= htmlspecialchars($relawan['no_hp']); ?></p>
            <p><strong>Alamat:</strong> <?= htmlspecialchars($relawan['alamat']); ?></p>
        </div>

        <!-- Informasi Tambahan -->
        <h2 class="text-xl font-semibold text-[#01B4BB] mt-8 mb-2">Informasi Relawan</h2>
        <div class="grid grid-cols-2 gap-4 text-gray-700">
            <p><strong>Divisi:</strong> <?= htmlspecialchars($relawan['divisi']); ?></p>
            <p><strong>Sosial Media:</strong> <?= htmlspecialchars($relawan['sosial_media']); ?></p>
            <p><strong>Pendidikan:</strong> <?= htmlspecialchars($relawan['pendidikan']); ?></p>
            <p><strong>Alasan Bergabung:</strong> <?= htmlspecialchars($relawan['alasan']); ?></p>
            <p><strong>Pengalaman Organisasi:</strong> <?= htmlspecialchars($relawan['pengalaman']); ?></p>
            <p><strong>Tanggung Jawab yang Pernah Diemban:</strong> <?= htmlspecialchars($relawan['tanggung_jawab']); ?></p>
            <p><strong>Kesibukan Saat Ini:</strong> <?= htmlspecialchars($relawan['kesibukan']); ?></p>
            <p><strong>Kritik & Saran:</strong> <?= htmlspecialchars($relawan['kritik_saran']); ?></p>
        </div>
        <div class="mt-6 text-left">
            <a href="dashboard.php" class="inline-flex items-center bg-gray-300 text-gray-700 hover:bg-gray-400 px-4 py-2 rounded-lg text-sm transition">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
</body>
</html>
