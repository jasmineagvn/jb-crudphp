<?php include '../components/header.php' ?>

<?php
// Tangani form submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = [
        'nama' => $_POST['nama'] ?? '',
        'jenisKelamin' => $_POST['jenisKelamin'] ?? '',
        'umur' => $_POST['umur'] ?? '',
        'whatsapp' => $_POST['whatsapp'] ?? '',
        'status' => $_POST['status'] ?? '',
        'sesi' => $_POST['sesi'] ?? '',
        'alasan' => $_POST['alasan'] ?? '',
        'pilihanKonseling' => $_POST['pilihanKonseling'] ?? '',
        'media' => $_POST['media'] ?? '',
        'cerita' => $_POST['cerita'] ?? '',
    ];

    // Simpan data, kirim email, atau redirect
    // Contoh redirect setelah submit
    header("Location: successpagebercerita.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Janji Baik Bercerita</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-[#121212]">

  <div class="max-w-6xl mx-auto p-6">
    <h1 class="text-center my-8 text-[32px] font-bold text-[#01B4BB] mb-20">
      Daftar Janji Baik Bercerita
    </h1>

    <div class="border-b-4 border-black mb-10">
      <h2 class="text-xl font-bold mb-6">Form Pendaftaran Janji Baik Bercerita</h2>
    </div>

    <form action="" method="POST" class="max-w-3xl mx-auto px-4 py-6 space-y-6">
      <!-- Nama -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Nama (Sesuai KTP)<span class="text-red-500">*</span></label>
        <input type="text" name="nama" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
      </div>

      <!-- Jenis Kelamin -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Jenis Kelamin<span class="text-red-500">*</span></label>
        <select name="jenisKelamin" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
          <option value="">Opsi Pilihan</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <!-- Umur -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Umur<span class="text-red-500">*</span></label>
        <input type="text" name="umur" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
      </div>

      <!-- WhatsApp -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">No HP atau WhatsApp<span class="text-red-500">*</span></label>
        <input type="text" name="whatsapp" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
      </div>

      <!-- Status -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Status<span class="text-red-500">*</span></label>
        <select name="status" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
          <option value="">Opsi Pilihan</option>
          <option value="Pelajar">Pelajar</option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Pekerja">Pekerja</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <!-- Sesi -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-2">Sesi Bercerita<span class="text-red-500">*</span></label>
        <label class="inline-flex items-center mr-4 text-[#12121299]">
          <input type="radio" name="sesi" value="Online" required class="mr-2">Online
        </label>
        <label class="inline-flex items-center text-[#12121299]">
          <input type="radio" name="sesi" value="Offline" required class="mr-2">Offline
        </label>
      </div>

      <!-- Alasan -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Alasan mendaftar Janji Baik Bercerita secara singkat<span class="text-red-500">*</span></label>
        <input type="text" name="alasan" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
      </div>

      <!-- Pilihan Konseling -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">Pilih Sesi Konseling<span class="text-red-500">*</span></label>
        <select name="pilihanKonseling" required class="w-full border border-gray-300 rounded-[12px] p-2 mt-2 h-[56px]">
          <option value="">Opsi Pilihan</option>
          <option value="Keluarga">Keluarga</option>
          <option value="Percintaan">Percintaan</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Kesehatan Mental">Kesehatan Mental</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <!-- Media Online -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-2">Media yang Dipilih (Online)<span class="text-red-500">*</span></label>
        <label class="inline-flex items-center mr-4 text-[#12121299]">
          <input type="radio" name="media" value="WhatsApp" required class="mr-2">WhatsApp
        </label>
        <label class="inline-flex items-center text-[#12121299]">
          <input type="radio" name="media" value="Google Meet" required class="mr-2">Google Meet
        </label>
      </div>

      <!-- Cerita -->
      <div>
        <label class="block font-semibold text-sm text-[#12121299] mb-1">
          Ceritakan secara singkat latar belakang cerita yang ingin kamu bagikan
        </label>
        <textarea name="cerita" rows="4" class="w-full border border-gray-300 rounded-[12px] p-2 mt-2"></textarea>
      </div>

      <div class="flex justify-between items-center mt-8">
        <!-- Tombol Kembali di kiri -->
        <a
          href="../jbbercerita.php"
          class="flex items-center gap-2 bg-orange-400 text-white px-6 py-2 rounded-full hover:bg-orange-500"
        >
          <img src="../assets/images/arrowleft.png" alt="Kembali" class="h-5 w-5" />
          <p>Kembali</p>
        </a>

        <!-- Tombol Selanjutnya di kanan -->
        <button
          type="submit"
          class="bg-orange-400 text-white px-6 py-2 w-[161px] rounded-full hover:bg-orange-600 transition cursor-pointer"
        >
          Kirim
        </button>
      </div>
    </form>
  </div>
</body>
</html>