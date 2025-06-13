<?php
require_once '../classes/Auth.php';
require_once '../config/database.php';

$auth = new Auth();
$auth->requireLogin();

$database = new Database();
$db = $database->getConnection();

// Hitung total siswa
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM siswa");
    $stmt->execute();
    $totalSiswa = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalSiswa = 0;
}

// Hitung total relawan
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM relawan");
    $stmt->execute();
    $totalRelawan = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalRelawan = 0;
}

// Hitung siswa baru 7 hari terakhir
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM siswa WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    $stmt->execute();
    $totalPendaftarBaru = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalPendaftarBaru = 0;
}

// Hitung relawan baru 7 hari terakhir
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM relawan WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    $stmt->execute();
    $totalRelawanBaru = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalRelawanBaru = 0;
}

// Hitung kolaborasi baru 7 hari terakhir
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM kolaborasi WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    $stmt->execute();
    $totalKolaborasiBaru = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalKolaborasiBaru = 0;
}

// Hitung total berita JBonNews
try {
    $stmt = $db->prepare("SELECT COUNT(*) as total FROM jbonnews");
    $stmt->execute();
    $totalBerita = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
} catch (PDOException $e) {
    $totalBerita = 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - JANJI BAIK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/janji-baik/assets/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="../assets/logo.png" alt="Logo" class="h-10 w-15 object-contain" />
                <span class="text-gray-400">|</span>
                <span class="text-gray-700">Dashboard Admin</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-[#01B4BB] text-white rounded-full flex items-center justify-center font-bold">
                        <?php echo strtoupper(substr($_SESSION['admin_nama'], 0, 1)); ?>
                    </div>
                    <span class="text-gray-700">Halo, <?php echo htmlspecialchars($_SESSION['admin_nama']); ?></span>
                </div>
                <a href="profile.php" class="text-sm px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-600">Profile</a>
                <a href="logout.php" class="text-sm px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Logout</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto p-6">
        <!-- Welcome Box -->
        <div class="bg-gradient-to-r from-[#01B4BB] to-blue-600 text-white p-6 rounded-lg mb-6">
            <h2 class="text-2xl font-bold">Selamat Datang di Dashboard Admin</h2>
            <p class="text-blue-100 mt-1">Kelola data siswa, relawan, kolaborasi, dan berita di sistem JANJI BAIK.</p>
        </div>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 mb-8">
            <?php
            $cards = [
                ['title' => 'Total Siswa', 'iconBg' => 'bg-blue-100', 'iconColor' => 'text-blue-600', 'value' => $totalSiswa],
                ['title' => 'Total Relawan', 'iconBg' => 'bg-orange-100', 'iconColor' => 'text-orange-600', 'value' => $totalRelawan],
                ['title' => 'Siswa Baru (7 hari)', 'iconBg' => 'bg-green-100', 'iconColor' => 'text-green-600', 'value' => $totalPendaftarBaru],
                ['title' => 'Relawan Baru (7 hari)', 'iconBg' => 'bg-purple-100', 'iconColor' => 'text-purple-600', 'value' => $totalRelawanBaru],
                ['title' => 'Kolaborasi Baru (7 hari)', 'iconBg' => 'bg-yellow-100', 'iconColor' => 'text-yellow-600', 'value' => $totalKolaborasiBaru],
                ['title' => 'Total Berita', 'iconBg' => 'bg-teal-100', 'iconColor' => 'text-teal-600', 'value' => $totalBerita],
            ];

            foreach ($cards as $card): ?>
                <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full <?php echo $card['iconBg']; ?> <?php echo $card['iconColor']; ?>">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12l2 2 4-4M20 12a8 8 0 11-16 0 8 8 0 0116 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm text-gray-500"><?php echo $card['title']; ?></p>
                            <p class="text-2xl font-bold text-gray-900"><?php echo $card['value']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Menu Navigasi -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $menus = [
                ['href' => 'data_siswa.php', 'title' => 'Data Siswa', 'desc' => 'Kelola data siswa', 'color' => 'blue'],
                ['href' => 'data_relawan.php', 'title' => 'Data Relawan', 'desc' => 'Kelola data relawan', 'color' => 'orange'],
                ['href' => 'data_kolaborasi.php', 'title' => 'Kolaborasi', 'desc' => 'Kelola program kolaborasi', 'color' => 'yellow'],
                ['href' => 'data_galeri.php', 'title' => 'Galeri', 'desc' => 'Kelola foto dan galeri', 'color' => 'pink'],
                // ['href' => 'laporan.php', 'title' => 'Laporan', 'desc' => 'Lihat laporan data', 'color' => 'green'],
                ['href' => 'data_berita.php', 'title' => 'JBonNews', 'desc' => 'Kelola berita terkini', 'color' => 'teal'],
            ];

            foreach ($menus as $menu): ?>
                <a href="<?php echo $menu['href']; ?>"
                   class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition transform hover:scale-105 group">
                    <div class="text-center">
                        <div class="p-4 bg-<?php echo $menu['color']; ?>-100 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center group-hover:bg-<?php echo $menu['color']; ?>-200">
                            <svg class="w-8 h-8 text-<?php echo $menu['color']; ?>-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12l2 2 4-4M20 12a8 8 0 11-16 0 8 8 0 0116 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo $menu['title']; ?></h3>
                        <p class="text-gray-600"><?php echo $menu['desc']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
