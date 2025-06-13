<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran Relawan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include '../components/header.php'; ?>
<body class="bg-white text-[#121212]">

  <div class="max-w-6xl mx-auto p-6">
    <h1 class="text-center my-8 text-[32px] font-bold text-[#01B4BB]">
      Daftar Menjadi Relawan
    </h1>

    <div class="border-b-2 border-black mb-20">
      <h1 class="text-xl font-semibold mb-6">
        Form Pendaftaran Relawan Janji Baik
      </h1>
    </div>

    <form action="../process/relawan_process.php" method="POST" class="w-full max-w-[928px] mx-auto space-y-8">
      
      <!-- Nama Lengkap -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Nama Lengkap<span class="text-red-500">*</span></label>
        <input type="text" name="nama_lengkap" required placeholder="Ketik Nama" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Nama Panggilan -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Nama Panggilan<span class="text-red-500">*</span></label>
        <input type="text" name="nama_panggilan" required placeholder="Ketik Nama Panggilan" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Tempat Lahir -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Tempat Lahir<span class="text-red-500">*</span></label>
        <input type="text" name="tempat_lahir" required placeholder="Ketik Tempat Lahir" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Tanggal Lahir -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Tanggal Lahir<span class="text-red-500">*</span></label>
        <input type="date" name="tanggal_lahir" required class="w-[425px] h-[56px] border-2 rounded-[12px] p-2 text-[#12121299]">
      </div>

      <!-- No HP -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">No HP atau WhatsApp<span class="text-red-500">*</span></label>
        <input type="text" name="no_hp" required placeholder="Ketik No.Hp / WhatsApp" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Alamat -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Alamat Lengkap (Sesuai KTP/KK)<span class="text-red-500">*</span></label>
        <input type="text" name="alamat" required placeholder="Ketik Alamat" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Divisi -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Divisi yang Dipilih<span class="text-red-500">*</span></label>
        <select name="divisi" required class="w-[455px] h-[56px] border-2 rounded-[12px] p-2 text-[#72717B]">
          <option value="">Opsi Pilihan</option>
          <option value="Canvas Think">Canvas Think</option>
          <option value="Human Responsibility">Human Responsibility</option>
          <option value="Creative Seeker">Creative Seeker</option>
          <option value="Tutor & CareTaker">Tutor & CareTaker</option>
          <option value="Growth Maker">Growth Maker</option>
          <option value="Student Glory">Student Glory</option>
          <option value="Digital Heroes">Digital Heroes</option>
          <option value="Counselor">Counselor</option>
        </select>
      </div>

      <!-- Sosial Media -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Sosial Media</label>
        <input type="text" name="sosial_media" placeholder="Ketik Sosial Media" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Riwayat Pendidikan -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Riwayat Pendidikan dan Jurusan<span class="text-red-500">*</span></label>
        <input type="text" name="pendidikan" required placeholder="Ketik Riwayat Pendidikan & Jurusan" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Alasan -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Mengapa Anda Tertarik Menjadi Relawan?<span class="text-red-500">*</span></label>
        <textarea name="alasan" required placeholder="Ketik Alasan" class="w-full h-[56px] border-2 rounded-[12px] p-2"></textarea>
      </div>

      <!-- Pengalaman -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Pengalaman Apa yang Anda Miliki di Dunia Kerelawanan?<span class="text-red-500">*</span></label>
        <textarea name="pengalaman" required placeholder="Ketik Pengalaman" class="w-full h-[56px] border-2 rounded-[12px] p-2"></textarea>
      </div>

      <!-- Deskripsi Posisi -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Deskripsikan Posisi atau Tanggung Jawab Anda di Lembaga Tersebut<span class="text-red-500">*</span></label>
        <textarea name="tanggung_jawab" required placeholder="Ketik Posisi" class="w-full h-[56px] border-2 rounded-[12px] p-2"></textarea>
      </div>

      <!-- Kesibukan -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Kesibukan Saat Ini<span class="text-red-500">*</span></label>
        <input type="text" name="kesibukan" required placeholder="Ketik Kesibukan" class="w-full h-[56px] border-2 rounded-[12px] p-2">
      </div>

      <!-- Kritik Saran -->
      <div>
        <label class="block text-[#12121299] font-semibold mb-4">Kritik dan Saran Pengembangan untuk Sekolah Janji Baik</label>
        <textarea name="kritik_saran" placeholder="Ketik Kritik dan Saran" class="w-full h-[56px] border-2 rounded-[12px] p-2"></textarea>
      </div>

      <div class="flex justify-between items-center mt-8">
        <!-- Tombol Kembali di kiri -->
        <a
          href="daftar_relawan.php"
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

  <?php include '../components/footer.php'; ?>
</body>
</html>
