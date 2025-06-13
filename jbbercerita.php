
<?php include 'components/header.php' ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Program sosial dan lingkungan berbasis teknologi untuk mendukung masa depan yang berkelanjutan.">
  <meta name="keywords" content="Program Sosial, Teknologi, Lingkungan">
  <meta name="author" content="Janji Baik">
  <title>Program Janji Baik</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- Hero Section -->
  <div class="relative mb-15">
    <img src="assets/images/bg-jbbercerita.png" alt="Hero Image" class="w-full h-auto object-cover">
    <div class="absolute inset-0 bg-opacity-50 flex items-center justify-center text-center px-4">
      <div class="max-w-3xl">
        <h1 class="text-white text-4xl md:text-5xl font-bold mb-4">Janji Baik Bercerita</h1>
        <p class="text-[50px] md:text-base font-bold text-white mb-4">(Terbuka Untuk Umum)</p>
        <p class="text-white text-base md:text-lg">
          Janji Baik Bercerita adalah ruang aman untuk berbagi cerita bersama konselor sebaya, tanpa rasa takut atau khawatir karena semuanya akan dijaga dengan penuh kerahasiaan—kalau belakangan ini kamu merasa perlu didengar, yuk bercerita bersama kami!
        </p>
      </div>
    </div>
  </div>

<!-- rules-section.php -->
<div class="flex flex-col items-center px-4 py-10 bg-white text-center">
  <img
    src="assets/images/jbbercerita.png"
    alt="Janji Baik Bercerita"
    class="w-[650px] h-[268px] mb-8"
  />

  <!-- Card container -->
  <div class="bg-[#E7F6F7] shadow-lg rounded-[30px] px-6 py-8 max-w-5xl w-full h-[450px] mb-8">
    <h2 class="text-xl font-bold mb-2 pb-6">
      Rules & Disclaimer Bercerita
    </h2>
    <div class="mx-auto mb-8 h-1 w-140 bg-black rounded"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left text-sm text-[#72717B]">
      <ul class="space-y-4 list-disc list-inside">
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Janji Baik Bercerita merupakan layanan licensing storybal (peer counselor)</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Durasi 1 sesi bercerita berlangsung 60 menit</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Konseling dilaksanakan oleh Kakak Fasilitator Janji Baik Bercerita</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Setiap konseling yang tidak digunakan dapat dibatalkan dalam 24 jam</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Sesi dilakukan secara daring:</span>
        </li>
        <div class="pl-6 space-y-2 text-[#72717B]">
          <div>• WhatsApp / Google Meet / Zoom</div>
          <div>• Offline (hanya berlaku jika tersedia kegiatan di kota yang sama)</div>
        </div>
      </ul>

      <ul class="space-y-6 list-disc list-inside">
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Terbuka untuk Siswa, Relawan, dan Umum</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Bercerita sangat penting agar seseorang mampu meredakan stres, meningkatkan regulasi emosi, pola pikir logis, pengambilan keputusan yang sehat, dll.</span>
        </li>
        <li class="flex items-start gap-2">
          <img src="assets/images/check_syarat.png" alt="icon" class="w-5 h-5 mt-1" />
          <span>Janji Baik Bercerita ditujukan untuk mendukung program konselor Janji Baik</span>
        </li>
      </ul>
    </div>
  </div>

  <!-- CTA Button Section -->
  <div class="flex justify-center">
    <div class="mt-10 w-[800px] h-full lg:h-[230px] bg-[#01B4BB] rounded-[55px] text-white text-center py-12">
      <p class="font-semibold text-[24px] mb-2 px-3">
        Sudah baca rules-nya? Yuk, lanjut dengan klik tombol di bawah untuk mulai bikin janji atau tanya dulu. Janji Baik Bercerita siap jadi ruang aman untuk kisahmu tumbuh dan didengar.
      </p>
      <div class="flex flex-col md:flex-row justify-center gap-4 mt-4">
        <a
          href="./forms/bercerita_form.php"
          class="bg-[#F79E1B] w-[250px] text-white px-6 py-2 rounded-full hover:bg-[#e58f12] transition"
        >
          Buat Janji Sekarang
        </a>
        <a
          href="https://wa.me/62817170422"
          target="_blank"
          rel="noopener noreferrer"
          class="bg-[#F79E1B] w-[250px] text-white px-6 py-2 rounded-full hover:bg-[#e58f12] transition"
        >
          Tanya Dulu
        </a>
      </div>
    </div>
  </div>
</div>

<?php include 'components/footer.php'; ?>