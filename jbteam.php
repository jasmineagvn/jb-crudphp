<?php include 'components/header.php' ?>

<main>
  <!-- Start: Hero -->
  <div class="hero relative">
    <img src="assets/images/bg-teamkami.png" alt="" class="w-full h-auto object-cover">
    <div class="absolute inset-0 px-4 md:px-0 flex flex-col gap-5 items-center mx-auto justify-center w-full md:w-[827px]">
      <h1 class="text-4xl md:text-[50px] font-bold tracking-[-0.7px] text-center text-white">
        Team Hebat Janji Baik
      </h1>
      <p class="text-sm md:text-base text-white text-center w-full md:w-[700px]">
       Beragam, penuh semangat, dan siap beraksi! Kami bekerja bersama, mewujudkan perubahan positif melalui kebaikan yang nyata. Setiap kontribusi dari setiap anggota memperkuat komitmen kami untuk menciptakan dampak yang lebih baik, lebih besar, dan lebih berarti bagi sesama.
      </p>  
    </div>
  </div>
  <!-- End: Hero -->

  <!-- Start: Galeri Tim -->
  <?php
  $teamMembers = [
    ["name" => "Jovi Oktaviansyah", "role" => "Pendiri Yayasan", "image" => "assets/images/jbteam/kajovi.png"],
    ["name" => "Syahroy", "role" => "Ketua Yayasan", "image" => "assets/images/jbteam/kasyahroy.png"],
    ["name" => "Siti Lailatul Fauziah", "role" => "Kepala Sekolah Janji Baik", "image" => "assets/images/jbteam/kazi.png"],
    ["name" => "Fitra Mutiarahayu", "role" => "Sekretaris Yayasan", "image" => "assets/images/jbteam/kamut.png"],
    ["name" => "Rochma Solehah (Omen)", "role" => "Kadiv Creative Seeker", "image" => "assets/images/jbteam//kaomen.png"],
    ["name" => "Khalissa", "role" => "Wakil Kadiv Creative Seeker", "image" => "assets/images/jbteam/kakhalis.png"],
    ["name" => "Zulfa Yustianuari", "role" => "Kadiv Counselor", "image" => "assets/images/jbteam/kazulfa.png"],
    ["name" => "Nada Indah", "role" => "Wakil Kadiv Counselor", "image" => "assets/images/jbteam/kanada.png"],
    ["name" => "Pandu Pangestu", "role" => "Kadiv Human Responsibility", "image" => "assets/images/jbteam/kapandu.png"],
    ["name" => "Fergie Virginia", "role" => "Wakil Kadiv Human Responsibility", "image" => "assets/images/jbteam/kafergie.png"],
    ["name" => "Elisa Vernandes", "role" => "Kadiv Growth Maker", "image" => "assets/images/jbteam/kaelisa.png"],
    ["name" => "Muhammad Sofiyudin", "role" => "Wakil Kadiv Growth Maker", "image" => "assets/images/jbteam/kasofiyudin.png"],
    ["name" => "Aida Safrizal", "role" => "Kadiv Student Glory", "image" => "assets/images/jbteam/kaaida.png"],
    ["name" => "Kayla Azzura", "role" => "Kadiv Digital Heroes", "image" => "assets/images/jbteam/kakayla.png"],
    ["name" => "Sujin Latifa", "role" => "Kadiv Canvas Think", "image" => "assets/images/jbteam/kasujin.png"],
  ];
  ?>

  <div class="py-12 px-4 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-10">
      <h2 class="text-3xl pl-5 md:pl-12 font-bold whitespace-nowrap">Dibalik Setiap Janji, Ada Kami!</h2>
      <img src="/janji-baik/assets/images/garis.png" alt="" class="w-[50%] hidden md:block" />
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php foreach ($teamMembers as $member): ?>
        <div class="bg-white shadow-lg overflow-hidden text-center p-4 transform duration-300 hover:scale-105 hover:shadow-xl hover:bg-[rgba(69,179,157,0.2)]">
          <img src="<?= $member['image'] ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="w-full h-60 object-cover mb-4" />
          <h3 class="text-lg font-semibold"><?= htmlspecialchars($member['name']) ?></h3>
          <p class="text-sm text-gray-600">sebagai <?= htmlspecialchars($member['role']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <!-- End: Galeri Tim -->

</main>

<?php include 'components/footer.php' ?>
