<?php include 'components/header.php' ?>

<main>
    <!-- Start : Hero -->
    <div class="hero relative">
      <img src="assets/images/bg-tentangkami.png" alt="" class="">
      <div class="absolute inset-0 px-4 md:px-0 flex flex-col gap-5 items-center mx-auto justify-center w-full md:w-[827px]">
        <h1 class="text-4xl md:text-[50px] font-bold tracking-[-0.7px] text-center text-white">
          Tentang Janji Baik
        </h1>
        <p class="text-sm md:text-base text-white text-center w-full md:w-[700px]">
          Tempat berkesempatan baik untuk  menghubungkan kepedulian dengan aksi dalam  membangun pendidikan berkualitas. Janji Baik didirikan pada tahun 2020 atas inisiatif sekelompok anak muda di Tangerang Selatan yang peduli terhadap dunia pendidikan. 
        </p>
      </div>
    </div>
    <!-- End : Start -->

    <!-- Start : Visi Misi -->
    <div class="relative">
      <img
        src="/janji-baik/assets/images/titik.png"
        alt=""
        class="w-[200px] h-[200px] absolute"
      />
      <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-10 md:gap-0 relative top-[135px] items-start">
        <div class="w-full md:w-[500px] px-5 md:px-0">
          <img
            src="/janji-baik/assets/images/visimisi.png"
            alt=""
            class="w-full rounded-[40px]"
          />
        </div>

        <div class="flex flex-col gap-10 w-full md:w-[555px] px-5 md:px-0">
          <div class="flex flex-col gap-5 text-end">
            <h1 class="text-2xl text-[#01B4BB]">Visi Janji Baik</h1>
            <p class="text-sm lg:text-base text-[#72717B]">
              Sebagai lembaga kepedulian dalam bidang pendidikan yang dapat
              membantu setiap anak mendapatkan haknya dalam Pendidikan,
              meningkatkan integritas dan keterampilan literasi digital.
            </p>
          </div>

          <div class="flex flex-col gap-5 text-end">
            <h1 class="text-2xl text-[#01B4BB]">Misi Janji Baik</h1>
            <div class="flex flex-col gap-3">
              <div class="flex gap-3 items-center">
                <h1 class="text-sm lg:text-base text-[#72717B]">
                  Menjangkau anak-anak putus sekolah dari keluarga Prasejahtera
                  untuk mendapatkan hak Pendidikan melalui jalur Pendidikan
                  nonformal (Pendidikan Kesetaraan).
                </h1>
                    <img src="/janji-baik/assets/images/check.png" alt="" class="w-4 h-4lg:w-5 lg:h-5" />
                </div>
              <div class="flex gap-3 items-center">
                <h1 class="text-sm lg:text-base text-[#72717B]">
                  Memberikan pemahaman kepada masyarakat akan pentingnya
                  pendidikan dan memperkecil Jarak (Gap)kesenjangan digital
                  melalui Pendidikan literasi digital.
                </h1>
                    <img src="/janji-baik/assets/images/check.png" alt="" class="w-4 h-4lg:w-5 lg:h-5" />
                </div>
              <div class="flex gap-3 items-center">
                <h1 class="text-sm lg:text-base text-[#72717B]">
                  Membentuk peserta didik menjadi manusia pembelajar seumur
                  hidup (Long Life Education) yang mempunyaiintegritas melalui
                  program pengembangan diri dan keterampilan bagi peserta didik.
                </h1>
                    <img src="/janji-baik/assets/images/check.png" alt="" class="w-4 h-4lg:w-5 lg:h-5" />
                </div>
              <div class="flex gap-3 items-center">
                <h1 class="text-sm lg:text-base text-[#72717B]">
                  Bekerja sama dengan pemerintah, lembaga swasta maupun
                  masyarakat dalam pelaksanaan pembelajaran.
                </h1>
                    <img src="/janji-baik/assets/images/check.png" alt="" class="w-4 h-4lg:w-5 lg:h-5" />
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End : Visi Misi -->

    <!-- Start : Legalitas -->
     <div class="flex justify-center mt-52 mx-5 md:mx-0">
        <div class="bg-white dark:bg-[#3C3F41] rounded-[30px] shadow-2xl p-6 md:p-8 max-w-3xl w-[778px]  text-center">
          <h4 class="text-[#01B4BB] dark:text-white text-sm font-medium mb-4">
            Legalitas Janji Baik
          </h4>
          <p class="text-black dark:text-gray-300 text-sm md:text-base font-semibold">
            No.  Akta YAYASAN BAIK MEDIA INDONESIA : No. 1 tanggal 21 Mei 2022<br />
            SK KEMENKUMHAM Yayasan : NOMOR AHU-0011306u.AH.01.04.TAHUN 2022<br />
            Nomer Induk Berusaha : 3005220067913<br />
            Nomor Pendaftaran HAKI : JID2022044547
          </p>
        </div>
      </div>
    <!-- End : Legalitas -->

    <!-- Start : Manfaat -->
        <?php
    $peta = [
      "title" => "Jumlah Tiap Kota",
      "data" => [
        ["color" => "bg-red-500", "city" => "Bekasi", "count" => "5"],
        ["color" => "bg-blue-500", "city" => "Tangerang", "count" => "5"],
        ["color" => "bg-red-700", "city" => "Depok", "count" => "5"],
        ["color" => "bg-orange-400", "city" => "DKI Jakarta", "count" => "5"],
        ["color" => "bg-green-400", "city" => "Cimahi", "count" => "5"],
        ["color" => "bg-sky-400", "city" => "Cilegon", "count" => "5"],
        ["color" => "bg-green-600", "city" => "Riau", "count" => "5"],
        ["color" => "bg-red-900", "city" => "Bogor", "count" => "5"],
        ["color" => "bg-purple-800", "city" => "Kalimantan", "count" => "5"],
        ["color" => "bg-purple-500", "city" => "Bali", "count" => "5"],
        ["color" => "bg-green-300", "city" => "NTB", "count" => "5"],
        ["color" => "bg-cyan-500", "city" => "Kuningan", "count" => "5"],
        ["color" => "bg-green-500", "city" => "Serang", "count" => "5"],
        ["color" => "bg-yellow-400", "city" => "NTT", "count" => "5"],
      ]
    ];
    ?>

    <section class="mt-20">
      <div class="flex flex-col gap-4 justify-center items-center">
        <span class="text-[#01B4BB] text-base">Penerima Manfaat</span>
        <h1 class="text-2xl font-bold mt-2 text-center">
          Sebaran Siswa & Relawan Janji Baik di Indonesia
        </h1>
        <div class="bg-[#A9EAED] py-8 px-8 rounded-full flex justify-center items-center">
          <h1 class="text-[50px] text-[#EC901D] font-semibold">141</h1>
        </div>
        <p class="text-base text-slate-500">Tahun Pelajaran 2022/2023</p>
      </div>

      <div class="max-w-6xl mx-auto flex mt-8 gap-6 justify-between w-full flex-col md:flex-row">
        <img src="/janji-baik/assets/images/peta1.png" alt="Peta Sebaran" class="w-[40%] hidden md:block" />

        <div class="flex flex-col md:flex-row justify-between items-center border-[#01B4BB] border-2 p-4 gap-4 rounded-lg w-full md:w-[60%] mx-5">
          <div class="flex flex-col gap-4 justify-between items-center w-full">
            <h1 class="text-base text-slate-500 text-center">
              Total Data Penerima Manfaat (2022/2023)
            </h1>
            <div class="bg-[#A9EAED] py-8 px-7 rounded-full flex justify-center items-center">
              <h1 class="text-2xl text-[#EC901D] font-semibold">573</h1>
            </div>
            <p class="text-base text-slate-500 text-center">
              (pemberdayaan & sekolah gratis)
            </p>
          </div>

          <div class="flex flex-col gap-4">
            <h1 class="text-center text-lg font-semibold"><?= $peta["title"] ?></h1>
            <div class="flex flex-wrap justify-start gap-1 space-x-0 md:space-x-2">
              <?php foreach ($peta["data"] as $item): ?>
                <div class="flex items-center gap-2 w-[45%] md:w-[30%]">
                  <div class="<?= $item["color"] ?> w-3 h-3 rounded-full"></div>
                  <p class="text-sm text-slate-500">
                    <?= htmlspecialchars($item["city"]) ?> = <?= $item["count"] ?>
                  </p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="relative w-full h-2 justify-end mb-15 hidden md:flex mt-12">
        <div class="relative w-[600px] h-2">
          <div class="absolute top-1/2 left-0 w-full h-1 bg-orange-400 transform -translate-y-1/2"></div>
        </div>
      </div>
    </section>
    <!-- End : Manfaat -->

    <!-- Start : Prinsip -->
     <section class="text-center mt-20 md:mt-42 px-4">
        <p class="text-sm text-[#01B4BB] font-medium mb-1">Prinsip Sekolah Janji Baik</p>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4">Janji Baik Selaras Dengan SDGs</h2>
        <p class="max-w-2xl mx-auto text-[#72717B] text-sm lg:text-base mb-10">
        Selaras dengan Tujuan Pembangunan Berkelanjutan (Sdgs), Janji Baik mengusung Pendidikan yang berkualitas (4) dan Peran partisipasi kemitraan sebagai tujuan (17).
        </p>

        <div class="max-w-6xl mx-auto flex flex-wrap justify-center md:gap-24 mt-0 mb-32">
            <div class="flex flex-wrap w-[315px] h-[247px]">
                <img src="/janji-baik/assets/images/sdgs.png" class="max-w-full h-auto object-contain" />
            </div>
            <div class="flex flex-wrap justify-center w-[315px] h-[247px]">
                <img src="/janji-baik/assets/images/global.png" class="max-w-full h-auto object-contain" />
            </div>
            <div class="flex flex-wrap w-[315px] h-[247px]">
                <img src="/janji-baik/assets/images/sdgs3.png" class="max-w-full h-auto object-contain"/>
            </div>
        </div>
      </section>
    <!-- End : Prinsip -->

     <!-- Start : program -->
          <?php
    // Data program dengan icon dan judul
    $programs = [
        [
            "icon" => "/janji-baik/assets/images/program5.png",
            "title" => "Proyek Sosial"
        ],
        [
            "icon" => "/janji-baik/assets/images/program2.png",
            "title" => "Peringatan Hari Besar Nasional"
        ],
        [
            "icon" => "/janji-baik/assets/images/program3.png",
            "title" => "Peringatan Hari Besar Keagamaan"
        ],
        [
            "icon" => "/janji-baik/assets/images/program4.png",
            "title" => "Study Tour"
        ],
    ];
    ?>

    <section class="relative flex flex-col gap-5 md:flex-row mt-16 justify-between items-center mb-32 ml-0 md:ml-20 px-5">
        <div class="flex flex-col gap-4 w-full md:w-[565px] ">
            <div class="flex flex-col gap-2">
                <span class="text-sm text-[#01B4BB] font-semibold">Program Pengembangan</span>
                <h1 class="text-2xl font-bold">Layanan Konseling Janji Baik</h1>
                <p class="text-sm lg:text-base text-[#72717B] mt-4">
                    Pelayanan konseling terpadu yang dilakukan oleh konselor untuk
                    meningkatkan aspek akademis maupun aspek psikologis peserta didik
                    maupun orang tua-nya masing-masing.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h1 class="text-2xl font-bold mt-6">Kegiatan Rutin Pendampingan</h1>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-3 items-center">
                        <img src="/janji-baik/assets/images/check_program.png" alt="" class="w-5 h-5" />
                        <p class="text-sm lg:text-base text-[#EC901D]">Parenting untuk Orang Tua Peserta Didik</p>
                    </div>
                    <h1 class="text-sm lg:text-base text-[#72717B]">
                        Kegiatan menghadirkan Narasumber dalam memberikan pelatihan,
                        bimbingan dan konsultasi bagi para Orang Tua.
                    </h1>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-3 items-center">
                        <img src="/janji-baik/assets/images/check_program.png" alt="" class="w-5 h-5" />
                        <p class="text-sm lg:text-base text-[#EC901D]">Kunjungan ke Rumah (Home Visit)</p>
                    </div>
                    <h1 class="text-sm lg:text-base text-[#72717B]">
                        Kegiatan yang dilakukan pihak sekolah agar mengetahui latar
                        belakang peserta didik dan meningkatkan pembelajaran campuran
                        (Blended Learning).
                    </h1>
                </div>
            </div>
        </div>

        <div class="md:relative">
            <img src="/janji-baik/assets/images/bg-2.png" alt="" class="w-[600px] h-[371px] hidden md:block" />
            <div class="md:absolute flex flex-wrap gap-5 md:gap-[52px] md:-top-12 md:left-12">
                <?php foreach($programs as $program): ?>
                    <div class="bg-white dark:bg-[#3C3F41] shadow-2xl w-full md:w-[200px] h-[200px] flex flex-col gap-2 justify-center items-center rounded-lg">
                        <img src="<?= htmlspecialchars($program['icon']) ?>" alt="<?= htmlspecialchars($program['title']) ?>" class="w-[100px]" />
                        <h1 class="text-center text-base"><?= htmlspecialchars($program['title']) ?></h1>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
     <!-- End : Program -->

     <!-- Start : Muatan -->
          <?php
    $cards = [
      [
        "image" => "/janji-baik/assets/images/muatan1.png",
        "title" => "Kelas Entrepreneur: ",
        "description" => "Digital Marketing, Kiat Membuka Usaha, dll."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan2.png",
        "title" => "Kelas Idola: ",
        "description" => "Menghadirkan praktisi seperti Atlet, Penulis, Penyanyi, Aktor, Selebgram, Direktur, Dokter, atau profesi lainnya."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan3.png",
        "title" => "Proyek Sosial: ",
        "description" => "Merencanakan program untuk mengajarkan kepedulian peserta didik, seperti berbagi takjil di bulan puasa, dan lainnya."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan4.png",
        "title" => "Kelas Seni: ",
        "description" => "Alat musik, Menari, Melukis, Prakarya, Perkusi dari barang bekas, dll."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan5.png",
        "title" => "Kelas Olahraga: ",
        "description" => "Berenang, Memanah, Futsal, dll."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan6.png",
        "title" => "Kelas Pengembangan Diri: ",
        "description" => "Manajemen waktu, Public Speaking, Kedisiplinan, Bahaya Merokok, dll."
      ],
      [
        "image" => "/janji-baik/assets/images/muatan7.png",
        "title" => "Kelas Literasi Digital: ",
        "description" => "Digital Marketing, Kiat Membuka Usaha, dll."
      ],
    ];
    ?>

    <div class="text-center py-12 px-4 mt-18">
      <h2 class="text-2xl font-semibold">Muatan Belajar Non-Akademik</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-6 mt-[80px]">
        <?php foreach (array_slice($cards, 0, 4) as $index => $card): ?>
          <div class="bg-white dark:bg-[#3C3F41] flex flex-col w-full h-[300px] shadow-lg px-5 py-14">
            <img src="<?= $card['image'] ?>" alt="" class="mx-auto mb-4 w-[101px]" />
            <h2 class="font-bold text-xl mb-2"><?= $card['title'] ?></h2>
            <p class="text-sm"><?= $card['description'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 mt-6">
        <?php foreach (array_slice($cards, 4) as $index => $card): ?>
          <div class="bg-white dark:bg-[#3C3F41] flex flex-col w-full h-[300px] shadow-lg px-5 py-14">
            <img src="<?= $card['image'] ?>" alt="" class="mx-auto mb-4 w-[101px]" />
            <h2 class="font-bold text-xl mb-2"><?= $card['title'] ?></h2>
            <p class="text-sm"><?= $card['description'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="relative w-full h-2 flex justify-end mt-20">
        <div class="relative w-[600px] h-2 mt-22">
          <div class="absolute top-1/2 left-0 w-full h-1 bg-orange-400 transform -translate-y-1/2"></div>
        </div>
      </div>
    </div>
     <!-- End : Muatan -->

     <!-- Start : Divisi -->
          <?php
    $programs = [
      [
        "title" => "Pendidikan Non-Formal & Kesetaraan",
        "description" => "Bagi anak-anak yang mengalami keterbatasan akses pendidikan formal, Sekolah Janji Baik menyediakan program pendidikan kesetaraan.",
        "icon" => "/janji-baik/assets/images/divisi1.png",
      ],
      [
        "title" => "Lingkungan",
        "description" => "Di era digital, keterampilan teknologi sangat penting. Program ini membekali siswa dengan pemahaman teknologi dasar, penggunaan internet yang produktif",
        "icon" => "/janji-baik/assets/images/divisi2.png",
      ],
      [
        "title" => "Bimbingan & Kesehatan Mental",
        "description" => "Kami menyediakan layanan bimbingan konseling untuk mendukung perkembangan akademik dan psikologis siswa",
        "icon" => "/janji-baik/assets/images/divisi3.png",
      ],
      [
        "title" => "Kesejahteraan Sosial",
        "description" => "Kami percaya bahwa pendidikan bukan hanya tanggung jawab sekolah, tetapi juga seluruh elemen masyarakat.",
        "icon" => "/janji-baik/assets/images/divisi4.png",
      ]
    ];
    ?>

    <section class="flex flex-col md:flex-row md:justify-between gap-10 md:gap-0 items-center mt-24 md:mt-44 mb-40">
      <!-- KIRI (Gambar & Grid Box) -->
      <div class="md:relative w-full order-2 md:order-1 h-screen md:h-full mb-28 md:mb-0">
        <img src="/janji-baik/assets/images/bg-2.png" alt="Background" class="w-[620px] hidden md:flex" />

        <div class="md:absolute flex flex-wrap justify-center w-full md:w-[800px] h-[500px] top-10 md:-top-10 gap-7">
          <?php foreach ($programs as $program): ?>
            <div class="bg-white dark:bg-[#3C3F41] shadow-lg flex flex-col rounded-xl mx-5 md:mx-0 px-4 justify-center gap-2 w-[341px] h-[230px]">
              <img src="<?= $program['icon'] ?>" alt="" width="40" height="40" />
              <h3 class="text-xl text-black dark:text-white font-bold mb-2"><?= $program['title'] ?></h3>
              <p class="text-gray-600 text-sm"><?= $program['description'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- KANAN (Judul & Deskripsi & Tombol) -->
      <div class="flex flex-col gap-5 w-full px-4 md:w-[550px] mr-0 md:mr-16 order-1 md:order-2">
        <span class="text-sm text-[#01B4BB] font-semibold">Divisi Janji Baik</span>
        <h1 class="text-[24px] font-semibold tracking-[-0.7px] leading-snug">
          Membangun Kebaikan, Bersama dalam Setiap Divisi
        </h1>
        <p class="text-sm text-[#72717B]">
          Di Janji Baik, setiap divisi memiliki peran penting dalam mewujudkan
          misi kami. Dengan kolaborasi tim yang solid, kami berupaya
          menghadirkan program terbaik, memastikan setiap inisiatif berjalan
          optimal, dan menciptakan dampak positif bagi mereka yang membutuhkan.
        </p>
        <button class="bg-[#EC901D] hover:bg-orange-600 text-sm md:text-base text-white px-8 md:px-[77px] py-4 rounded-full cursor-pointer">
          <a href="forms/daftar_relawan.php">Pelajari lebih lanjut</a>
        </button>
      </div>
    </section>
     <!-- End : Divisi -->

     <!-- Start : Sistem -->
      <section class="text-center py-12 px-4 ">
        <p class="text-sm text-[#01B4BB] font-medium mb-8">Sistem Kelulusan dan Legalitas Ijazah</p>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4">Kurikulum Pembelajaran Tematik Kurikulum MERDEKA</h2>
        <p class="max-w-2xl mx-auto text-[#72717B] text-sm lg:text-base mb-10">
        Kurikulum Sekolah Janji Baik mengacu kepada PERMENDIKBUD RISTEK No. 5 Tahun 2022 tentang Standar Kompetensi Lulusan (SKL) yang dikembangkan dengan pendekatan konstekstual, konkret dan berbasis literasi digital.
        </p>

        <div class="max-w-6xl mx-auto flex flex-col-3 gap-24 mt-12 mb-8">
            <div class="flex flex-wrap w-full">
                <img src="/janji-baik/assets/images/sistem.png" class="max-w-full h-auto object-contain" />
            </div>
        </div>
      </section>
     <!-- End : Sistem -->

     <!-- Start : Undang -->
      <section class="text-center px-4">
      <span class="text-sm text-[#01B4BB] font-medium mb-1">Undang-Undang</span>

      <h1 class="max-w-2xl mx-auto text-[#72717B] text-sm lg:text-base mb-10">
        Undang-undang No. 20 Tahun 2003 tentang Sistem Pendidikan Nasional
        (SISDIKNAS) mengakomodasi Pendidikan Non Formal (di bawah Payung PKBM)
        memperoleh ijazah kesetaraan yang dikeluarkan oleh KEMENDIKBUDRISTEK.
      </h1>

      <div class="flex flex-col md:flex-row gap-4 justify-center items-center mb-6">
        <?php
        $pakets = [
          "Paket A Setara SD (Sekolah Dasar)",
          "Paket B Setara SMP (Sekolah Menengah Pertama)",
          "Paket C Setara SMA (Sekolah Menengah Atas)"
        ];

        foreach ($pakets as $paket): ?>
          <div class="flex items-center gap-2 border border-orange-400 text-orange-500 px-4 py-2 rounded-full shadow-[0_4px_10px_rgba(0,0,0,0.05)]">
            <div class="flex items-start justify-end text-right gap-2">
              <img src="/janji-baik/assets/images/check.png" alt="Checklist" class="w-5 h-5 mt-1" />
              <h2 class="text-[15px] text-[#72717B] leading-relaxed tracking-[-0.2px]">
                <?= $paket ?>
              </h2>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <p class="text-gray-500 text-sm">
        Ijazah yang didapat melalui hasil belajar dapat digunakan untuk<br />
        melanjutkan tingkatan sekolah lainnya dan Universitas.
      </p>
    </section>
     <!-- End : Undang -->
</main>

<?php include 'components/footer.php' ?>