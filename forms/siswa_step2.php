<?php
// siswa_step2.php (Data Orang Tua)
session_start();
$_SESSION['data_diri'] = $_POST;
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
    $currentStep = 2; // Ini adalah step ke-1
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
<form action="siswa_step3.php" method="POST" class="lg:w-[928px] w-full mx-auto">

        <!-- Identitas Ayah -->
        <h2 class="text-lg font-semibold mb-4 border-b-2 border-black pb-2">
            Identitas Ayah
        </h2>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Nama Lengkap <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_nama" required placeholder="Ketik Nama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Agama <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_agama" required placeholder="Ketik Agama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pendidikan Terakhir <span class="text-red-600">*</span>
        </label>
        <select name="ayah_pendidikan" required class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4 text-[#12121299]">
        <option value="" disabled selected>Opsi Pilihan</option>
        <option value="Tidak sekolah">Tidak Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="Diploma">Diploma</option>
        <option value="Sarjana">Sarjana</option>
        <option value="Pascasarjana">Pascasarjana</option>
        </select>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pekerjaan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_pekerjaan" required placeholder="Ketik Pekerjaan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Jumlah Penghasilan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_penghasilan" required placeholder="Ketik Jumlah Penghasilan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Riwayat Penyakit <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_riwayat_penyakit" required placeholder="Ketik Riwayat Penyakit" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Alamat Lengkap (Sesuai KTP/KK) <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_alamat" required placeholder="Ketik Alamat" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        No.HP atau WhatsApp <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ayah_nohp" required placeholder="Ketik No.HP atau WhatsApp" class="w-full border border-gray-500 rounded-[12px] mb-8 px-5 py-4" />


        <!-- Identitas Ibu -->
        <h2 class="text-lg font-semibold mb-4 border-b-2 border-black pb-2">
        Identitas Ibu
        </h2>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Nama Lengkap <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_nama" required placeholder="Ketik Nama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Agama <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_agama" required placeholder="Ketik Agama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pendidikan Terakhir <span class="text-red-600">*</span>
        </label>
        <select name="ibu_pendidikan" required class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4 text-[#12121299]">
        <option value="" disabled selected>Opsi Pilihan</option>
        <option value="Tidak sekolah">Tidak Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="Diploma">Diploma</option>
        <option value="Sarjana">Sarjana</option>
        <option value="Pascasarjana">Pascasarjana</option>
        </select>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pekerjaan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_pekerjaan" required placeholder="Ketik Pekerjaan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Jumlah Penghasilan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_penghasilan" required placeholder="Ketik Jumlah Penghasilan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Riwayat Penyakit <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_riwayat_penyakit" required placeholder="Ketik Riwayat Penyakit" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Alamat Lengkap (Sesuai KTP/KK) <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_alamat" required placeholder="Ketik Alamat" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        No.HP atau WhatsApp <span class="text-red-600">*</span>
        </label>
        <input type="text" name="ibu_nohp" required placeholder="Ketik No.HP atau WhatsApp" class="w-full border border-gray-500 rounded-[12px] mb-8 px-5 py-4" />


        <!-- Identitas Wali -->
        <h2 class="text-lg font-semibold mb-4 border-b-2 border-black pb-2">
        Identitas Wali
        </h2>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Nama Lengkap <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_nama" required placeholder="Ketik Nama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Agama <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_agama" required placeholder="Ketik Agama" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pendidikan Terakhir <span class="text-red-600">*</span>
        </label>
        <select name="wali_pendidikan" required class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4 text-[#12121299]">
        <option value="" disabled selected>Opsi Pilihan</option>
        <option value="Tidak sekolah">Tidak Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="Diploma">Diploma</option>
        <option value="Sarjana">Sarjana</option>
        <option value="Pascasarjana">Pascasarjana</option>
        </select>

        <label class="block mb-2 text-[#12121299] font-semibold">
        Pekerjaan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_pekerjaan" required placeholder="Ketik Pekerjaan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Jumlah Penghasilan <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_penghasilan" required placeholder="Ketik Jumlah Penghasilan" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Riwayat Penyakit <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_riwayat_penyakit" required placeholder="Ketik Riwayat Penyakit" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        Alamat Lengkap (Sesuai KTP/KK) <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_alamat" required placeholder="Ketik Alamat" class="w-full border border-gray-500 rounded-[12px] mb-4 px-5 py-4" />

        <label class="block mb-2 text-[#12121299] font-semibold">
        No.HP atau WhatsApp <span class="text-red-600">*</span>
        </label>
        <input type="text" name="wali_nohp" required placeholder="Ketik No.HP atau WhatsApp" class="w-full border border-gray-500 rounded-[12px] mb-8 px-5 py-4" />


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