<?php
require_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();

// Ambil data berita
$beritaCard = [];

try {
    $query = "SELECT * FROM berita ORDER BY created_at DESC";
    $stmt = $conn->query($query);
    $beritaCard = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error mengambil berita: " . $e->getMessage());
}
?>

<?php include 'components/header.php'; ?>

<main>

    <!-- Hero Section -->
    <div class="relative w-full">
        <img src="assets/images/bg-jbonnews.png" alt="Hero" class="w-full object-cover max-h-[650px]">
        <div class="absolute inset-0 flex flex-col justify-center items-center bg-opacity-40">
            <h1 class="text-white text-4xl md:text-5xl font-bold text-center">JB On News</h1>
            <p class="text-sm md:text-base text-white text-center w-full md:w-[700px] mt-10">
                Temukan berbagai cerita inspiratif, program bermanfaat, dan kolaborasi penuh makna yang membawa dampak nyata bagi pendidikan dan kemanusiaan. Bersama, kita bisa menyalakan harapan, membangun masa depan, dan menciptakan perubahan untuk dunia yang lebih baik!
            </p>
        </div>
    </div>

    <!-- Berita Terbaru Section -->
    <section class="mt-16">
        <!-- Judul + Garis -->
        <div class="flex justify-between items-center px-5 md:px-12">
            <h1 class="text-3xl font-bold">Berita Terbaru</h1>
            <img src="assets/images/garis-news.png" alt="garis" class="w-[80%] hidden md:block">
        </div>

        <!-- Container Berita -->
        <div class="max-w-7xl mt-12 bg-[#A9EAED] rounded-3xl mx-5 md:mx-auto">
            <div class="flex flex-wrap justify-center gap-10 px-9 py-16">
                <?php foreach ($beritaCard as $item): ?>
                    <div class="flex flex-col gap-4 w-[350px] bg-white px-4 py-5 rounded-2xl shadow">
                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="Gambar Berita" class="w-full h-48 object-cover" />
                        <h1 class="text-lg text-[#063FFB] font-semibold leading-snug">
                            <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener noreferrer"
                               class="text-[#063FFB] font-semibold hover:underline underline-offset-4 transition-all duration-300">
                                <?= htmlspecialchars($item['title']) ?>
                            </a>
                        </h1>
                        <span class="text-sm text-gray-500"><?= date('d M Y', strtotime($item['created_at'])) ?></span>
                        <p class="text-sm text-gray-500"><?= htmlspecialchars($item['description']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
