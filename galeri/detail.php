<?php
$conn = new mysqli("localhost", "root", "", "janjibaik_db");
$id = $_GET['id'];
$galeri = $conn->query("SELECT * FROM galeri WHERE id = $id")->fetch_assoc();
$fotos = $conn->query("SELECT * FROM galeri_foto WHERE galeri_id = $id");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($galeri['judul']) ?> - Galeri Detail</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include '../components/header.php'; ?>
<body class="bg-white text-gray-800">

  <!-- Hero Section -->
 <!-- Hero Section -->
  <div class="relative w-full h-screen overflow-hidden">
    <!-- Gambar latar -->
    <img src="../uploads/galeri/<?= $galeri['thumbnail'] ?>" alt="Thumbnail" class="w-full h-full object-cover">

    <!-- Overlay gelap transparan -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>

    <!-- Konten di atas gambar -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4">
      <h1 class="text-3xl md:text-4xl font-bold mb-2"><?= htmlspecialchars($galeri['judul']) ?></h1>
      <p class="max-w-2xl"><?= htmlspecialchars($galeri['deskripsi']) ?></p>
    </div>
  </div>


  <!-- Heading Jejak Kebaikan -->
  <div class="flex justify-between items-center mb-15 mt-20 px-5 md:px-12">
    <h1 class="text-3xl font-bold whitespace-nowrap">Jejak Kebaikan Dalam Setiap Momen</h1>
    <img src="/icons/garis-news.png" alt="" class="w-[55%] h-1 hidden md:block">
  </div>

  <!-- Judul Galeri -->
  <div class="max-w-6xl mx-auto mt-9 px-5 lg:px-0">
    <h1 class="text-base font-bold text-[#01B4BB] border-b-2 pb-5 border-black">
      <?= htmlspecialchars($galeri['judul']) ?>
    </h1>
  </div>

  <!-- Galeri Gambar -->
  <div class="max-w-6xl mx-auto mt-14">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-5 lg:px-0">
      <?php while ($foto = $fotos->fetch_assoc()): ?>
        <img
          src="../uploads/galeri/<?= $foto['nama_file'] ?>"
          alt="Galeri Gambar"
          class="w-full h-full object-cover"
          loading="lazy"
        />
      <?php endwhile; ?>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-16 mx-8 md:mx-0">
      <a href="/janji-baik/galeri/index.php"
        class="w-[50px] h-[50px] rounded-full flex items-center justify-center cursor-pointer">
        <img src="../assets/images/arrow-left.png" alt="Kembali" class="w-15">
      </a>
    </div>
  </div>
  <?php include '../components/footer.php'; ?>
</body>
</html>
