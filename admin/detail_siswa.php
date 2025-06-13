<?php
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$id = intval($_GET['id']);  // Lebih aman dengan intval untuk mencegah SQL Injection dasar
$query = "SELECT * FROM siswa WHERE id = $id";
$result = $koneksi->query($query);
$siswa = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Detail Siswa - Janji Baik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- HEADER -->
    <header class="bg-white shadow border-b sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <h1 class="text-2xl font-bold text-[#01B4BB]">JANJI BAIK</h1>
                <span class="text-gray-500">|</span>
                <span class="text-gray-700 font-medium">Detail Siswa</span>
            </div>
            <a href="data_siswa.php" class="inline-flex items-center bg-gray-300 text-gray-700 hover:bg-gray-400 px-4 py-2 rounded-lg text-sm transition">
                ← Kembali ke Data Siswa
            </a>
        </div>
    </header>

    <!-- CONTENT -->
    <main class="max-w-6xl mx-auto p-6 mt-8">
        <div class="bg-white rounded-xl shadow-md p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Detail Siswa</h2>

            <?php
            function section_start($title) {
                echo "<section class='mb-8'>";
                echo "<h3 class='text-xl font-semibold text-[#01B4BB] border-b border-blue-300 pb-2 mb-4'>$title</h3>";
                echo "<div class='grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-700'>";
            }
            function section_end() {
                echo "</div></section>";
            }
            ?>

            <!-- Data Pribadi -->
            <?php section_start('Data Pribadi'); ?>
                <p><span class="font-semibold">Nama Lengkap:</span> <?= htmlspecialchars($siswa['nama_lengkap']); ?></p>
                <p><span class="font-semibold">Jenis Kelamin:</span> <?= htmlspecialchars($siswa['jenis_kelamin']); ?></p>
                <p><span class="font-semibold">Tempat Lahir:</span> <?= htmlspecialchars($siswa['tempat_lahir']); ?></p>
                <p><span class="font-semibold">Tanggal Lahir:</span> <?= htmlspecialchars($siswa['tanggal_lahir']); ?></p>
                <p><span class="font-semibold">Umur:</span> <?= htmlspecialchars($siswa['umur']); ?></p>
                <p><span class="font-semibold">NIK:</span> <?= htmlspecialchars($siswa['nik']); ?></p>
                <p><span class="font-semibold">Tingkatan Dituju:</span> <?= htmlspecialchars($siswa['tingkatan_dituju']); ?></p>
                <p><span class="font-semibold">Kelas Dituju:</span> <?= htmlspecialchars($siswa['kelas_dituju']); ?></p>
                <p><span class="font-semibold">Kelas Terakhir:</span> <?= htmlspecialchars($siswa['kelas_terakhir']); ?></p>
                <p><span class="font-semibold">Status Keluarga:</span> <?= htmlspecialchars($siswa['status_keluarga']); ?></p>
                <p><span class="font-semibold">Alamat:</span> <?= htmlspecialchars($siswa['alamat']); ?></p>
                <p><span class="font-semibold">Status Tempat Tinggal:</span> <?= htmlspecialchars($siswa['status_tempat_tinggal']); ?></p>
                <p><span class="font-semibold">KWH Listrik:</span> <?= htmlspecialchars($siswa['kwh_listrik']); ?></p>
                <p><span class="font-semibold">Riwayat Penyakit:</span> <?= htmlspecialchars($siswa['riwayat_penyakit']); ?></p>
                <p><span class="font-semibold">Alasan Melanjutkan:</span> <?= htmlspecialchars($siswa['alasan_melanjutkan']); ?></p>
            <?php section_end(); ?>

            <!-- Identitas Ayah -->
            <?php section_start('Identitas Ayah'); ?>
                <p><span class="font-semibold">Nama:</span> <?= htmlspecialchars($siswa['ayah_nama']); ?></p>
                <p><span class="font-semibold">Agama:</span> <?= htmlspecialchars($siswa['ayah_agama']); ?></p>
                <p><span class="font-semibold">Pendidikan:</span> <?= htmlspecialchars($siswa['ayah_pendidikan']); ?></p>
                <p><span class="font-semibold">Pekerjaan:</span> <?= htmlspecialchars($siswa['ayah_pekerjaan']); ?></p>
                <p><span class="font-semibold">Penghasilan:</span> <?= htmlspecialchars($siswa['ayah_penghasilan']); ?></p>
                <p><span class="font-semibold">Riwayat Penyakit:</span> <?= htmlspecialchars($siswa['ayah_riwayat_penyakit']); ?></p>
                <p><span class="font-semibold">Alamat:</span> <?= htmlspecialchars($siswa['ayah_alamat']); ?></p>
                <p><span class="font-semibold">No. HP:</span> <?= htmlspecialchars($siswa['ayah_nohp']); ?></p>
            <?php section_end(); ?>

            <!-- Identitas Ibu -->
            <?php section_start('Identitas Ibu'); ?>
                <p><span class="font-semibold">Nama:</span> <?= htmlspecialchars($siswa['ibu_nama']); ?></p>
                <p><span class="font-semibold">Agama:</span> <?= htmlspecialchars($siswa['ibu_agama']); ?></p>
                <p><span class="font-semibold">Pendidikan:</span> <?= htmlspecialchars($siswa['ibu_pendidikan']); ?></p>
                <p><span class="font-semibold">Pekerjaan:</span> <?= htmlspecialchars($siswa['ibu_pekerjaan']); ?></p>
                <p><span class="font-semibold">Penghasilan:</span> <?= htmlspecialchars($siswa['ibu_penghasilan']); ?></p>
                <p><span class="font-semibold">Riwayat Penyakit:</span> <?= htmlspecialchars($siswa['ibu_riwayat_penyakit']); ?></p>
                <p><span class="font-semibold">Alamat:</span> <?= htmlspecialchars($siswa['ibu_alamat']); ?></p>
                <p><span class="font-semibold">No. HP:</span> <?= htmlspecialchars($siswa['ibu_nohp']); ?></p>
            <?php section_end(); ?>

            <!-- Identitas Wali -->
            <?php section_start('Identitas Wali'); ?>
                <p><span class="font-semibold">Nama:</span> <?= htmlspecialchars($siswa['wali_nama']); ?></p>
                <p><span class="font-semibold">Agama:</span> <?= htmlspecialchars($siswa['wali_agama']); ?></p>
                <p><span class="font-semibold">Pendidikan:</span> <?= htmlspecialchars($siswa['wali_pendidikan']); ?></p>
                <p><span class="font-semibold">Pekerjaan:</span> <?= htmlspecialchars($siswa['wali_pekerjaan']); ?></p>
                <p><span class="font-semibold">Penghasilan:</span> <?= htmlspecialchars($siswa['wali_penghasilan']); ?></p>
                <p><span class="font-semibold">Riwayat Penyakit:</span> <?= htmlspecialchars($siswa['wali_riwayat_penyakit']); ?></p>
                <p><span class="font-semibold">Alamat:</span> <?= htmlspecialchars($siswa['wali_alamat']); ?></p>
                <p><span class="font-semibold">No. HP:</span> <?= htmlspecialchars($siswa['wali_nohp']); ?></p>
            <?php section_end(); ?>

            <!-- Kontak Darurat -->
            <?php section_start('Kontak Darurat'); ?>
                <p><span class="font-semibold">Nama:</span> <?= htmlspecialchars($siswa['kontak_nama']); ?></p>
                <p><span class="font-semibold">Hubungan:</span> <?= htmlspecialchars($siswa['kontak_hubungan']); ?></p>
                <p><span class="font-semibold">Alamat:</span> <?= htmlspecialchars($siswa['kontak_alamat']); ?></p>
                <p><span class="font-semibold">No. HP:</span> <?= htmlspecialchars($siswa['kontak_nohp']); ?></p>
            <?php section_end(); ?>
        </div>
    </main>
</body>
</html>
