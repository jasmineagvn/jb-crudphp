<?php include 'components/header.php' ?>

<main class="">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.6.2/countUp.umd.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const options = {
        duration: 2.5
      };

      const anak = new countUp.CountUp('count-anak', 573, options);
      const mitra = new countUp.CountUp('count-mitra', 141, options);
      const kota = new countUp.CountUp('count-kota', 180, options);

      // Mulai animasi hanya jika target ada
      if (!anak.error) anak.start();
      if (!mitra.error) mitra.start();
      if (!kota.error) kota.start();
    });
  </script>

  <!-- Start : Hero -->
    <div class="hero relative">
      <img src="assets/images/hero-main.png" alt="" class="">
      <div class="absolute inset-0 px-6 md:px-0 flex flex-col gap-6 items-center mx-auto justify-center w-full md:w-[827px] text-white text-center">

    <!-- Judul -->
    <h1 class="text-4xl md:text-[50px] font-bold leading-tight tracking-[-0.7px]">
      Sekolah Inovatif Untuk Masa Depan Tanpa Hambatan
    </h1>

    <!-- Paragraf -->
    <p class="text-sm md:text-base leading-relaxed w-full md:w-[700px]">
      Kami percaya bahwa setiap anak memiliki hak untuk mendapatkan akses pendidikan yang berkualitas dan memiliki potensi besar untuk sukses. Sekolah Teknologi Janji Baik hadir untuk mewujudkan impian tanpa hambatan biaya.
    </p>
        <div class="flex justify-center mt-16 gap-6">
          <a href="about.php" class="bg-[#EC901D] hover:bg-orange-600 text-sm md:text-base text-white px-8 md:px-[60px] py-4 rounded-full">Pelajari lebih lanjut</a>
          <a href="jbkontak.php" class="bg-[#EC901D] hover:bg-orange-600 text-sm md:text-base text-white px-8 md:px-[77px] py-4 rounded-full">Hubungi Kami</a>
        </div>  
      </div>
    </div>
    <!-- End : Start -->

    <!-- Start: Info Stats -->
<div class="absolute top-[92%] left-1/2 transform -translate-x-1/2 
            bg-[#01B4BB] py-6 px-12 rounded-3xl w-[60%] max-w-5xl shadow-lg z-10">
  <div class="flex flex-col md:flex-row justify-between items-center text-white w-full 
              divide-y md:divide-y-0 md:divide-x divide-white">

    <!-- Anak Penerima Manfaat -->
    <div class="flex flex-col items-center gap-2 w-full md:w-1/3 px-4">
      <h1 class="text-[50px] font-semibold text-white"><span id="count-anak">0</span>+</h1>
      <p class="text-sm text-white/70 text-center">Anak Penerima Manfaat</p>
    </div>

    <!-- Kolaborasi Mitra -->
    <div class="flex flex-col items-center gap-2 w-full md:w-1/3 px-4">
      <h1 class="text-[50px] font-semibold text-white"><span id="count-mitra">0</span>+</h1>
      <p class="text-sm text-white/70 text-center">Kolaborasi Mitra yang Terjalin</p>
    </div>

    <!-- Kota di seluruh Indonesia -->
    <div class="flex flex-col items-center gap-2 w-full md:w-1/3 px-4">
      <h1 class="text-[50px] font-semibold text-white"><span id="count-kota">0</span>+</h1>
      <p class="text-sm text-white/70 text-center">Kota di seluruh Indonesia</p>
    </div>

  </div>
</div>
<!-- End: Info Stats -->






    <!-- Start : Tentang Sekolah -->
     <div class="max-w-6xl mx-auto mt-20 lg:mt-[150px]">
      <div class="flex justify-between items-center px-4 md:px-0">
        <div class="flex flex-col gap-y-8 w-full md:w-[50%]">
          <header class="flex flex-col gap-y-2 w-full md:w-[550px]">
            <p class="text-teal-500 font-bold tracking-[-0.7px]">
              Tentang Sekolah Janji Baik
            </p>
            <h1 class="text-black dark:text-white text-3xl lg:text-4xl font-semibold  tracking-[-0.7px] leading-tight">
              Pendidikan untuk Semua, Masa Depan yang Lebih Baik
            </h1>
          </header>

          <p class="text-[#72717B] text-sm lg:text-base dark:text-gray-400 w-full md:w-[496px] leading-relaxed tracking-[-0.7px]">
            Sekolah Janji Baik adalah sekolah non-profit yang menyediakan
            pendidikan gratis bagi anak-anak kurang mampu di Indonesia. Berdiri
            sejak 2020, kami hadir untuk menjembatani kesenjangan pendidikan dan
            memberikan kesempatan belajar yang layak bagi setiap anak.
          </p>

          <div class="flex flex-col gap-y-8">
            <h1 class="text-black dark:text-white text-3xl lg:text-4xl font-medium">Misi Kami</h1>

            <div class="flex flex-col gap-y-4">
              <div class="flex gap-x-4 items-center">
                <img src="assets/images/check.svg" alt="icon" class="w-4 h-4 lg:w-5 lg:h-5" />
                <p class="text-[#72717B] text-sm lg:text-base dark:text-gray-400 leading-relaxed tracking-[-0.7px]">
                 Menjangkau anak-anak putus sekolah dari keluarga Prasejahtera untuk mendapatkan hak Pendidikan melalui jalur Pendidikan nonformal (Pendidikan Kesetaraan).
                </p>
            </div>
              <div class="flex gap-x-4 items-center">
                <img src="assets/images/check.svg" alt="icon" class="w-4 h-4 lg:w-5 lg:h-5" />
                <p class="text-[#72717B] text-sm lg:text-base dark:text-gray-400 leading-relaxed tracking-[-0.7px]">
                 Menjangkau anak-anak putus sekolah dari keluarga Prasejahtera untuk mendapatkan hak Pendidikan melalui jalur Pendidikan nonformal (Pendidikan Kesetaraan).
                </p>
            </div>
              <div class="flex gap-x-4 items-center">
                <img src="assets/images/check.svg" alt="icon" class="w-4 h-4 lg:w-5 lg:h-5" />
                <p class="text-[#72717B] text-sm lg:text-base dark:text-gray-400 leading-relaxed tracking-[-0.7px]">
                 Menjangkau anak-anak putus sekolah dari keluarga Prasejahtera untuk mendapatkan hak Pendidikan melalui jalur Pendidikan nonformal (Pendidikan Kesetaraan).
                </p>
            </div>
            </div>
          </div>

          <a href="about.php" class="lg:w-[510px] w-full bg-[#EC901D] py-5 rounded-full text-center text-white">Pelajari lebih lanjut</a>
        </div>

        <img src="assets/images/voluenter.png" alt="" class="w-[500px] hidden md:flex" />
      </div>
    </div>
    <!-- End : Tentang Sekolah -->

    <!-- Start : Card -->
    <div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6 mt-[90px] lg:mt-[150px]">
      <div class="rounded-xl p-6 dark:bg-[#3C3F41] shadow-2xl gap-5 flex flex-col items-center hover:bg-[rgba(69,179,157,0.2)]">
        <img class="w-20" src="assets/images/siswa.png" alt="">
        <h2 class="text-xl dark:text-white font-semibold mb-2">Menjadi Siswa</h2>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-6 flex-1 text-center">
         Dapatkan pendidikan berkualitas untuk masa depan yang lebih cerah.Bergabunglah bersama kami dan nikmati fasilitas belajar lengkap,program pengembangan siswa, serta lingkungan belajar yang mendukung
        </p>
        <a href="forms/syarat_siswa.php" class="bg-[#EC901D] text-white px-6 py-2 rounded-full hover:bg-orange-600 transition cursor-pointer">
          Daftar Sebagai Siswa
        </a>
      </div>
      <div class="rounded-xl p-6 dark:bg-[#3C3F41] shadow-2xl gap-5 flex flex-col items-center hover:bg-[rgba(69,179,157,0.2)]">
        <img class="w-20" src="assets/images/siswa.png" alt="">
        <h2 class="text-xl dark:text-white font-semibold mb-2">Menjadi Relawan</h2>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-6 flex-1 text-center">
         Bergabunglah sebagai pengajar, mentor, atau tenaga relawan untuk membantu anak-anak belajar dan berkembang. Anda bisa berbagi ilmu, pengalaman, atau keterampilan dengan mereka.
        </p>
        <a href="forms/daftar_relawan.php" class="bg-[#EC901D] text-white px-6 py-2 rounded-full hover:bg-orange-600 transition cursor-pointer">
          Daftar Menjadi Relawan
        </a>
      </div>
      <div class="rounded-xl p-6 dark:bg-[#3C3F41] shadow-2xl gap-5 flex flex-col items-center hover:bg-[rgba(69,179,157,0.2)]">
        <img class="w-20" src="assets/images/siswa.png" alt="">
        <h2 class="text-xl dark:text-white font-semibold mb-2">Berdonasi</h2>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-6 flex-1 text-center">
         Dukung pendidikan anak-anak dengan memberikan donasi. Setiap kontribusi yang Anda berikan akan digunakan untuk biaya operasional sekolah, perlengkapan belajar, dan program pengembangan siswa.
        </p>
        <a  href="donasi/donasiumum.php" class="bg-[#EC901D] text-white px-6 py-2 rounded-full hover:bg-orange-600 transition cursor-pointer">
          Ingin Berdonasi?
        </a>
      </div>
      <div class="rounded-xl p-6 dark:bg-[#3C3F41] shadow-2xl gap-5 flex flex-col items-center hover:bg-[rgba(69,179,157,0.2)]">
        <img class="w-20" src="assets/images/siswa.png" alt="">
        <h2 class="text-xl dark:text-white font-semibold mb-2">Berkolaborasi</h2>
        <p class="text-gray-600 dark:text-gray-300 text-sm mb-6 flex-1 text-center">
         Kami membuka peluang kerja sama dengan komunitas, perusahaan, dan lembaga lainnya untuk menciptakan program pendidikan yang lebih berdampak. Mari bersama membangun masa depan yang lebih baik!
        </p>
        <a href="forms/kolaborasi_form.php" class="bg-[#EC901D] text-white px-6 py-2 rounded-full hover:bg-orange-600 transition cursor-pointer">
          Mau Berkolaborasi?
        </a>
      </div>
    </div>
    <!-- End : Card -->

    <!-- Start : Program -->
      <?php
  $programCard = [
    [
      "icon" => "/janji-baik/assets/images/education.png",
      "title" => "Sekolah Gratis Berbasis Teknologi",
      "description" => "Bagi anak-anak yang mengalami keterbatasan akses pendidikan formal, Sekolah Janji Baik menyediakan program pendidikan gratis jenjang setara SD, SMP, SMA melalui pendidikan non formal kesetaraan.",
    ],
    [
      "icon" => "/janji-baik/assets/images/education.png",
      "title" => "Lingkungan",
      "description" => "Di era digital, keterampilan teknologi sangat penting. Program ini membekali siswa dengan pemahaman teknologi dasar, penggunaan internet yang produktif",
    ],
    [
      "icon" => "/janji-baik/assets/images/education.png",
      "title" => "Bimbingan & Kesehatan Mental",
      "description" => "Kami menyediakan layanan bimbingan konseling untuk mendukung perkembangan akademik dan psikologis siswa",
    ],
    [
      "icon" => "/janji-baik/assets/images/education.png",
      "title" => "Kesejahteraan Sosial",
      "description" => "Kami percaya bahwa pendidikan bukan hanya tanggung jawab sekolah, tetapi juga seluruh elemen masyarakat.",
    ],
  ];
  ?>

  <section class="flex flex-col md:flex-row md:justify-between gap-10 md:gap-0 items-center mt-24 md:mt-44">
    <!-- Card Container -->
    <div class="md:relative w-full order-2 md:order-1 h-screen md:h-full mb-28 md:mb-0">
      <img src="/janji-baik/assets/images/bg-2.png" alt="Background" class="w-[620px] hidden md:flex" />

      <div class="md:absolute flex flex-wrap justify-center w-full lg:w-[800px] lg:h-[500px] top-10 md:-top-10 gap-7">
        <?php foreach ($programCard as $program): ?>
          <div class="bg-white shadow-lg flex flex-col rounded-xl mx-5 md:mx-0 px-4 py-6 lg:py-0 justify-center gap-2 lg:w-[341px] lg:h-[230px] w-full h-full">
            <img src="<?= $program['icon'] ?>" alt="Icon" width="40" height="40" />
            <h3 class="text-xl text-black font-bold mb-2"><?= htmlspecialchars($program['title']) ?></h3>
            <p class="text-gray-600 text-sm"><?= htmlspecialchars($program['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Text Section -->
    <div class="flex flex-col gap-5 w-full px-4 md:w-[550px] mr-0 md:mr-16 order-1 md:order-2">
      <span class="text-sm text-[#01B4BB] font-semibold">Program Unggulan</span>
      <h1 class="text-[24px] font-semibold tracking-[-0.7px] leading-snug">
        Membuka Akses, Meningkatkan Kesempatan, Mewujudkan Janji Baik
      </h1>
      <p class="text-sm text-[#72717B] dark:text-gray-300">
        Janji Baik lahir dari kepedulian dan keyakinan bahwa setiap anak
        berhak mendapatkan pendidikan yang layak. Kami hadir untuk memberikan
        akses belajar bagi anak-anak yang kurang beruntung, membuka peluang
        yang lebih luas, dan memastikan mereka memiliki masa depan yang lebih
        baik.
      </p>
      <a href="jbprogram.php" class="inline-block text-center px-6 py-3 bg-[#EC901D] text-white font-medium rounded-full hover:bg-orange-600 transition">
        Lihat Program di Janji Baik
      </a>
    </div>
  </section>
  <!-- End : Program -->

  <!-- Start : Testi -->
      <?php
  $testi = [
    [
      "nama" => "Pandu Pangestu",
      "role" => "Relawan Janji Baik",
      "desc" => "“Bagiku Janji Baik kini menjadi satu-satunya tempat untuk mempertanggungjawabkan keilmuan dan tempat memanen banyak kebaikan yang InsyaAllah kelak akan menjadi pemberat amal di akhirat💙”",
      "profile" => "/janji-baik/assets/images/testi1.png",
    ],
    [
      "nama" => "Syaiful Bahri Ibnu Abdillah",
      "role" => "Relawan Janji Baik",
      "desc" => "“Saya merasa sangat beruntung bisa menjadi bagian dari keluarga Janji Baik. Selain mendapatkan pengalaman berharga, ini juga menjadi bagian dari proses belajar saya untuk menjadi pribadi yang dapat bermanfaat bagi orang lain. Tidak ada hal lain yang saya harapkan selain melihat senyum bahagia para adik-adik siswa Janji Baik. Sukses terus untuk Janji Baik💙💙”",
      "profile" => "/janji-baik/assets/images/testi2.png",
    ],
    [
      "nama" => "Putri Amalia Soleha",
      "role" => "Relawan Janji Baik",
      "desc" => "“Pertama kali kenal Janji Baik, aku langsung senang karena merasa ngajar di sini punya rasa yang beda. Aku bisa menyalurkan hobi belajar sejarah, meski aku anak MIPA. Di sini aku nggak cuma mengajar, tapi juga ikut belajar berkat anak-anak yang penuh semangat. Pesanku, semoga kalian makin disiplin belajarnya, dan semoga kebaikan selalu menyertai kita semua. Aamiin 🫶”",
      "profile" => "/janji-baik/assets/images/testi3.png",
    ],
    [
      "nama" => "Alan Nuary",
      "role" => "Siswa Janji Baik",
      "desc" => "“Cerita selama di Janji Baik seruu banyak banget kalau ikut acara offline nya banyak aktifitas kaya games, tanya jawab, bahkan tour dll, sampe ada satu hari pulang sampe malem wkwkw dan kesan nya si kagum sama kakak-kakak nya support banget kalau ada pelajaran yang sulit dimengerti kakak nya fast respon banget, pokok nya kalian keren sekali. Terima kasih Janji Baik💙”",
      "profile" => "/janji-baik/assets/images/testi4.png",
    ],
    [
      "nama" => "Fergie Virginia",
      "role" => "Relawan Janji Baik",
      "desc" => "“Menjadi bagian dari sekolah Janji Baik adalah pengalaman yang sangat berarti bagi saya. Senangnya melihat anak-anak yang bisa sekolah, di tengah keterbatasan mereka. Janji Baik bukan hanya menjadi tempat belajar bagi mereka, tetapi juga tempat saya belajar tentang arti hidup, harapan, dan ketulusan. Janji Baik, tempat berkesempatan baik😊👌”",
      "profile" => "/janji-baik/assets/images/testi5.png",
    ],
    [
      "nama" => "Siti Aisyah",
      "role" => "Siswa Janji Baik",
      "desc" => "“Aku suka sekolah di Janji Baik. Kalau aku nggak sekolah di Janji Baik, gabakal bisa punya temen-temen baik kayak mereka, terus kakak-kakak yang baik yang selalu ngajarin kita yang masih belum ngerti banyak.”",
      "profile" => "/janji-baik/assets/images/testi6.png",
    ],
    [
      "nama" => "Sawinah",
      "role" => "Siswa Janji Baik",
      "desc" => "“Belajar di Janji Baik benar-benar beda—lebih santai dan fleksibel karena online, tapi tetap seru dengan kegiatan bulanan. Favoritku adalah Kelas Kreasi, karena bisa ketemu langsung, main game, dan dengerin sharing dari kampus. Aku jadi lebih semangat belajar dan punya gambaran jelas soal masa depan. Terima kasih Janji Baik, sudah jadi rumah belajar yang menyenangkan dan bermakna! 💙✨”",
      "profile" => "/janji-baik/assets/images/testi7.png",
    ],
    [
      "nama" => "Patricia Putri Kissya Rintyaningtyas",
      "role" => "Relawan Janji Baik",
      "desc" => "“Menjadi tutor kelas 1 di Sekolah Janji Baik adalah pengalaman luar biasa. Melihat anak-anak tumbuh dalam akademik, kemandirian, dan percaya diri sangat membahagiakan. Kurikulumnya menyenangkan dan bermakna, ditambah kegiatan seperti karyawisata dan nonton bersama yang membuat suasana belajar jadi positif. Saya bangga bisa jadi bagian dari awal perjalanan mereka.”",
      "profile" => "/janji-baik/assets/images/testi8.png",
    ],
    [
      "nama" => "Detta Pristianti",
      "role" => "Relawan Janji Baik",
      "desc" => "“Seneng banget selama di Janji Baik, temen-temennya sangat helpful dan programnya jelas memberikan manfaat ke adik-adik. semoga kedepannya semakin berkembang menjadi lebih baik yaaaaa luv🥰”",
      "profile" => "/janji-baik/assets/images/testi9.png",
    ],
  ];
  ?>

  <div class="mt-[190px] lg:mt-30">
    <div class="text-center mb-12 px-6">
      <p class="text-[#01B4BB] text-sm font-semibold">Testimoni & Kisah Inspiratif</p>
      <h2 class="text-2xl lg:text-3xl font-semibold mt-2 mb-4">
        Cerita Perubahan dari Mereka yang Telah Terbantu
      </h2>
      <p class="text-gray-600 text-sm lg:text-base dark:text-gray-400 max-w-2xl mx-auto">
        Setiap anak yang belajar di Sekolah Janji Baik memiliki cerita
        perjuangan yang unik. Dari keterbatasan hingga menemukan harapan baru,
        mereka membuktikan bahwa pendidikan bisa mengubah masa depan.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4 py-6 bg-gray-100">
      <?php foreach ($testi as $item): ?>
        <div class="flex gap-4 bg-white w-[450px] px-6 py-7 rounded-3xl">
          <img src="<?= htmlspecialchars($item['profile']) ?>" alt="<?= htmlspecialchars($item['nama']) ?>" class="w-14 h-14 rounded-full object-cover" />
          <div class="flex flex-col gap-4">
            <h1 class="text-2xl font-bold"><?= htmlspecialchars($item['nama']) ?></h1>
            <span class="text-sm text-gray-600"><?= htmlspecialchars($item['role']) ?></span>
            <p class="text-gray-600 text-[13px]"><?= htmlspecialchars($item['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- End : Testi -->

  <!-- Start : Partner -->
        <?php
    $partners = [
      "/janji-baik/assets/images/pertamina.png" => "Pertamina",
      "/janji-baik/assets/images/unilever.png" => "Unilever",
      "/janji-baik/assets/images/kadin.png" => "KADIN",
      "/janji-baik/assets/images/kitabisa.png" => "Kitabisa",
      "/janji-baik/assets/images/kakseto.png" => "Kaseto",
      "/janji-baik/assets/images/bakrie.png" => "Bakrie",
      "/janji-baik/assets/images/yayasandunia.png" => "Yayasandunia",
      "/janji-baik/assets/images/fim.png" => "FIM",
      "/janji-baik/assets/images/ui.png" => "UI",
      "/janji-baik/assets/images/binus.png" => "Binus",
      "/janji-baik/assets/images/untirta.png" => "Untirta",
      "/janji-baik/assets/images/unpad.png" => "Unpad",
      "/janji-baik/assets/images/unpam.png" => "Unpam"
    ];
    ?>

    <section class="max-w-6xl mx-auto text-center px-4 lg:px-0 mt-[90px] lg:mt-[150px]">
  <p class="text-sm text-[#01B4BB] font-medium mb-1">Mitra Kerja Janji Baik</p>
  <h2 class="text-2xl md:text-3xl font-semibold mb-4">Partner Kolaborasi Janji Baik</h2>
  <p class="max-w-2xl mx-auto text-[#72717B] text-sm md:text-base mb-10">
    Kami bangga bekerja sama dengan berbagai mitra yang mendukung visi
    Sekolah Janji Baik. Melalui kolaborasi ini, kami bersama-sama
    menciptakan peluang pendidikan yang lebih baik, menyediakan fasilitas
    yang memadai, serta membantu pengembangan karakter dan keterampilan
    siswa.
  </p>

  <div class="flex flex-col gap-24 mt-24 mb-32">
    <!-- Baris Pertama -->
    <div class="flex flex-wrap justify-center gap-10">
      <?php
      $partners1 = ["Pertamina", "Unilever", "KADIN", "Kitabisa"];
      foreach ($partners1 as $partner) {
        echo '
        <div class="w-[120px] h-[80px] bg-white rounded-xl transition duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center">
          <img src="assets/images/' . $partner . '.png" alt="' . ucfirst($partner) . '" class="w-full h-full object-contain p-2" />
        </div>';
      }
      ?>
    </div>

    <!-- Baris Kedua -->
    <div class="flex flex-wrap justify-center gap-24">
      <?php
      $partners2 = ["Kakseto", "Bakrie", "Yayasandunia", "FIM", "UI"];
      foreach ($partners2 as $partner) {
        echo '
        <div class="w-[120px] h-[80px] bg-white rounded-xl transition duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center">
          <img src="assets/images/' . $partner . '.png" alt="' . strtoupper($partner) . '" class="w-full h-full object-contain p-2" />
        </div>';
      }
      ?>
    </div>

    <!-- Baris Ketiga -->
    <div class="flex flex-wrap justify-center gap-24">
      <?php
      $partners3 = ["Binus", "Untirta", "Unpad", "Unpam"];
      foreach ($partners3 as $partner) {
        echo '
        <div class="w-[120px] h-[80px] bg-white rounded-xl transition duration-300 transform hover:scale-105 hover:shadow-lg flex items-center justify-center">
          <img src="assets/images/' . $partner . '.png" alt="' . strtoupper($partner) . '" class="w-full h-full object-contain p-2" />
        </div>';
      }
      ?>
    </div>
  </div>
</section>



  <!-- End : Partner -->

</main>

<?php include 'components/footer.php' ?>

