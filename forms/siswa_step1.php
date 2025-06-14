<?php
// siswa_step1.php
session_start();
?>
<?php include '../components/header.php'; ?>

<!-- Stepper -->
<div class="flex justify-between items-center mb-20 lg:w-[928px] w-full mx-auto mt-10">
  <?php
    $steps = [
      1 => 'Data Diri',
      2 => 'Identitas Orang Tua',
      3 => 'Kontak Darurat'
    ];
    $currentStep = 1; // Ini adalah step ke-1
    $totalSteps = count($steps);
    $index = 1;

    foreach ($steps as $number => $label):
  ?>
    <div class="flex-1 text-center relative">
      <!-- Circle -->
      <div class="flex items-center justify-center">
        <div class="w-8 h-8 rounded-full text-white font-bold flex items-center justify-center 
          <?= $currentStep === $number ? 'bg-orange-500' : 'border border-black text-black bg-white' ?>">
          <?= $number ?>
        </div>
      </div>

      <!-- Label -->
      <p class="mt-2 text-sm font-medium"><?= $label ?></p>

      <!-- Line -->
      <?php if ($index < $totalSteps): ?>
        <div class="absolute top-4 left-1/2 w-full h-0.5 transform -translate-y-1/2 z-[-1]">
          <hr class="border-t-2 <?= $currentStep >= $number + 1 ? 'border-orange-500' : 'border-gray-300' ?>" />
        </div>
      <?php endif; ?>
    </div>
  <?php
    $index++;
    endforeach;
  ?>
</div>

<!-- Form -->
<form action="siswa_step2.php" method="POST" class="lg:w-[928px] w-full mx-auto">
  <label class="block mb-2 text-[#12121299] font-semibold">
    Nama Lengkap <span class="text-red-600">*</span>
  </label>
  <input type="text" name="nama_lengkap" placeholder="Ketik Nama" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Jenis Kelamin <span class="text-red-600">*</span>
  </label>
  <select name="jenis_kelamin" required class="border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4 lg:w-[455px] w-full text-[#12121299]">
    <option value="">Opsi Pilihan</option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Tempat Lahir <span class="text-red-500">*</span>
  </label>
  <input type="text" name="tempat_lahir" placeholder="Ketik Tempat Lahir" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <div class="flex gap-4">
    <div class="flex-1">
      <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
        Tanggal Lahir <span class="text-red-500">*</span>
      </label>
      <input type="date" name="tanggal_lahir" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4 text-[#12121299]">
    </div>
    <div class="flex-1">
      <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
        Umur <span class="text-red-500">*</span>
      </label>
      <input type="text" name="umur" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">
    </div>
  </div>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    NIK (Apabila Belum mempunyai KTP bisa dilihat di Kartu Keluarga) <span class="text-red-500">*</span>
  </label>
  <input type="text" name="nik" placeholder="Ketik NIK" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">Tingkatan yang Dituju *</label>
  <div class="mb-4 flex flex-col gap-6 text-[#12121299]">
    <?php foreach (["Paket A (Setara SD)", "Paket B (Setara SMP)", "Paket C (Setara SMA)"] as $item): ?>
      <label class="block">
        <input type="radio" name="tingkatan_dituju" value="<?= $item ?>" required class="mr-2"> <?= $item ?>
      </label>
    <?php endforeach; ?>
  </div>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Kelas yang Dituju <span class="text-red-500">*</span>
  </label>
  <select name="kelas_dituju" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4 text-[#12121299]">
    <option value="">Opsi Pilihan</option>
    <option value="Kelas 1">Kelas 1</option>
    <option value="Kelas 2">Kelas 2</option>
    <option value="Kelas 3">Kelas 3</option>
  </select>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Kelas/Tingkatan Terakhir (sesuai rapor terakhir yang dimiliki) <span class="text-red-500">*</span>
  </label>
  <input type="text" name="kelas_terakhir" placeholder="Contoh: Kelas 6 Semester 2" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <div class="mb-4">
    <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
      Status dalam Keluarga <span class="text-red-500">*</span>
    </label>
    <div class="flex flex-col gap-6 text-[#12121299]">
      <?php foreach (["Anak Kandung", "Anak Angkat", "Anak Sambung/Tiri"] as $item): ?>
        <div>
          <input type="radio" name="status_keluarga" value="<?= $item ?>" required>
          <label class="ml-2"><?= $item ?></label>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Alamat Lengkap (sesuai KTP/KK) <span class="text-red-600">*</span>
  </label>
  <input type="text" name="alamat" required placeholder="Ketik Alamat" class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Status Tempat Tinggal <span class="text-red-600">*</span>
  </label>
  <div class="mb-4 flex flex-col gap-6 text-[#12121299]">
    <?php foreach (["Sewa", "Milik Pribadi", "Tinggal dengan Saudara"] as $item): ?>
      <label class="block">
        <input type="radio" name="status_tempat_tinggal" value="<?= $item ?>" required class="mr-2"> <?= $item ?>
      </label>
    <?php endforeach; ?>
  </div>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Berapa KWH Listrik <span class="text-red-600">*</span>
  </label>
  <div class="mb-4 flex flex-col gap-6 text-[#12121299]">
    <?php foreach (["450", "900", "1300", "2200", "3500 ke atas"] as $item): ?>
      <label class="block">
        <input type="radio" name="kwh_listrik" value="<?= $item ?>" required class="mr-2"> <?= $item ?>
      </label>
    <?php endforeach; ?>
  </div>

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Riwayat Penyakit (isi tanda "-" jika tidak ada) <span class="text-red-600">*</span>
  </label>
  <input type="text" name="riwayat_penyakit" placeholder="Ketik Riwayat Penyakit" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-4 px-5 py-4">

  <label class="block mb-2 mt-6 text-[#12121299] font-semibold">
    Alasan Melanjutkan Sekolah <span class="text-red-600">*</span>
  </label>
  <input type="text" name="alasan_melanjutkan" placeholder="Ketik Alasan Anda" required class="w-full border border-gray-500 p-2 rounded-[12px] mb-8 px-5 py-4">

  <div class="flex justify-between items-center mt-8">
    <!-- Tombol Kembali di kiri -->
    <a
      href="syarat_siswa.php"
      class="flex items-center gap-2 bg-orange-400 text-white px-6 py-2 rounded-full hover:bg-orange-500"
    >
      <img src="../assets/images/arrowleft.png" alt="Kembali" class="h-5 w-5" />
      <p>Kembali</p>
    </a>

    <!-- Tombol Selanjutnya di kanan -->
    <button
      type="submit"
      class="bg-[#EC901D] hover:bg-orange-600 text-white px-6 py-2 rounded-full cursor-pointer"
    >
      Selanjutnya
    </button>
  </div>

</form>

<?php include '../components/footer.php'; ?>
