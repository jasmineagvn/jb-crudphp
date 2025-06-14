<?php
// siswa_step3.php (Kontak Darurat dan Simpan DB)
session_start();
$_SESSION['data_ortu'] = $_POST;
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
    $currentStep = 3; // Ini adalah step ke-1
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
<form action="../process/siswa_process.php" method="POST" class="lg:w-[928px] w-full mx-auto space-y-[15px]">

    <h2 class="text-xl font-semibold border-b-2 border-black mb-5 pb-4">
        Isi Kontak Darurat dengan Keluarga Terdekat yang Tidak Tinggal Serumah
    </h2>

    <div>
        <label class="block mb-2 font-semibold text-[#12121299]">
            Nama Lengkap <span class="text-red-500">*</span>
        </label>
        <input type="text" name="kontak_nama" required placeholder="Ketik Nama"
            class="w-full p-3 border rounded-[12px]">
    </div>

    <div>
        <label class="block mb-2 font-semibold text-[#12121299]">
            Hubungan dengan Siswa (Om/Tante, Sepupu, Kakak, dll) <span class="text-red-500">*</span>
        </label>
        <input type="text" name="kontak_hubungan" required placeholder="Ketik Jawaban"
            class="w-full p-3 border rounded-[12px]">
    </div>

    <div>
        <label class="block mb-2 font-semibold text-[#12121299]">
            Alamat Lengkap (Sesuai KTP/KK) <span class="text-red-500">*</span>
        </label>
        <textarea name="kontak_alamat" required placeholder="Ketik Alamat"
            class="w-full p-3 border rounded-[12px]"></textarea>
    </div>

    <div>
        <label class="block mb-2 font-semibold text-[#12121299]">
            No.HP atau WhatsApp <span class="text-red-500">*</span>
        </label>
        <input type="text" name="kontak_nohp" required placeholder="Ketik No.HP atau WhatsApp"
            class="w-full p-3 border rounded-[12px]">
    </div>

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
        Kirim
      </button>
    </div>
</form>
<?php include '../components/footer.php'; ?>
