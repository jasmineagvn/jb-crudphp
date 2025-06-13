<?php
// formberkalabaik.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle form submission here
  header('Location: successpageberkalabaik.php');
  exit();
}
?>

<?php include '../components/header.php' ?>

<div class="max-w-4xl mx-auto px-4 py-10">
  <h2 class="text-[30px] text-center font-semibold mb-2 pb-6">
    Pilihan Paket Berkala Baik
  </h2>
  <div class="mx-auto mb-8 h-1 w-140 bg-black rounded"></div>

  <!-- Paket Pilihan -->
  <form method="POST" class="space-y-4">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
      <?php
        $pakets = [
          ["id" => 1, "label" => "Paket Warga 25rb/bln", "src" => "../assets/images/berkalabaik/paketwarga.png"],
          ["id" => 2, "label" => "Paket Kecil 50rb/bln", "src" => "../assets/images/berkalabaik/paketkota.png"],
          ["id" => 3, "label" => "Paket Kepedulian 75rb/bln", "src" => "../assets/images/berkalabaik/paketkepulauan.png"],
          ["id" => 4, "label" => "Paket Nusantara 100rb/bln", "src" => "../assets/images/berkalabaik/paketnusantara.png"],
          ["id" => 5, "label" => "Paket Exclusive (diatas 100k/bln, nominal dibebaskan)", "src" => "../assets/images/berkalabaik/paketexclusive.png"]
        ];

        foreach ($pakets as $paket) {
          echo '<label class="flex flex-col items-center p-3 cursor-pointer">';
          echo '<div class="flex items-center mb-2">';
          echo '<input type="radio" name="paket" class="mr-2" value="' . $paket['id'] . '" required />';
          echo '<span class="font-medium text-sm text-center">' . $paket['label'] . '</span>';
          echo '</div>';
          echo '<img src="' . $paket['src'] . '" alt="' . $paket['label'] . '" class="w-32 md:w-40 h-auto" />';
          echo '</label>';
        }
      ?>
    </div>

    <!-- Email -->
    <div>
      <label class="block mb-1 font-semibold text-sm text-[#12121299]">
        Alamat Email<span class="text-red-500">*</span>
      </label>
      <input type="email" name="email" placeholder="Ketik Alamat Email" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Nama -->
    <div>
      <label class="block mb-2 font-semibold text-sm text-[#12121299]">
        Nama Lengkap<span class="text-red-500">*</span>
      </label>
      <input type="text" name="nama" placeholder="Ketik Nama" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Tempat Lahir -->
    <div>
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        Tempat Lahir<span class="text-red-500">*</span>
      </label>
      <input type="text" name="tempatLahir" placeholder="Ketik Tempat Lahir" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Tanggal Lahir -->
    <div>
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        Tanggal Lahir<span class="text-red-500">*</span>
      </label>
      <input type="date" name="tanggalLahir" required class="w-[425px] border rounded-[12px] p-2 h-[56px] text-[#12121299]" />
    </div>

    <!-- No HP -->
    <div>
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        No.HP atau WhatsApp<span class="text-red-500">*</span>
      </label>
      <input type="tel" name="phone" placeholder="Ketik No.HP atau WhatsApp" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Alamat -->
    <div>
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        Alamat Lengkap (Sesuai KTP/KK)<span class="text-red-500">*</span>
      </label>
      <input type="text" name="alamat" placeholder="Ketik Alamat" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Nominal Exclusive (opsional - muncul via JS) -->
    <div id="nominalField" style="display: none;">
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        Jika Anda Memilih Paket Exclusive, Tuliskan Nominal Donasi disini*<span class="text-red-500">*</span>
      </label>
      <input type="number" name="nominal" placeholder="Ketik Nominal (misal: 150000)" class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Tanggal Pembayaran -->
    <div>
      <label class="block mb-2 font-semibold text-[#12121299] text-sm">
        Tanggal Pembayaran Setiap Bulan (1-31)<span class="text-red-500">*</span>
      </label>
      <input type="number" name="tanggalPembayaran" placeholder="Ketik Tanggal" min="1" max="31" required class="w-full border rounded-[12px] p-2 h-[56px]" />
    </div>

    <!-- Checkbox -->
    <div class="space-y-2 text-[14px]">
      <label class="block mb-6 mt-6 font-semibold text-[#12121299] text-sm">
        Silahkan Isi Ketersediaan berikut<span class="text-red-500">*</span>
      </label>
      <label class="flex items-start gap-2 text-[#12121299] mb-8">
        <input type="checkbox" class="scale-150 mt-1" required />
        <span>Saya menyatakan kesediaan berdonasi di Berkala Baik dengan kerelaan hati dan tanpa paksaan</span>
      </label>
      <label class="flex items-start gap-2 text-[#12121299] mb-8">
        <input type="checkbox" class="scale-150 mt-1" required />
        <span>Saya berkomitmen untuk berdonasi sesuai nominal dan tanggal yang sudah saya tetapkan</span>
      </label>
      <label class="flex items-start gap-2 text-[#12121299] mb-8">
        <input type="checkbox" class="scale-150 mt-1" required />
        <span>Saya menyadari aksi kebaikan yang dilakukan Janji Baik untuk membantu anak putus sekolah di Indonesia</span>
      </label>
    </div>

    <!-- Tombol Submit -->
    <div class="text-right">
      <button type="submit" class="bg-[#EC901D] text-white px-6 py-2 w-[161px] rounded-full hover:bg-orange-600 transition cursor-pointer">
        Kirim
      </button>
    </div>
  </form>
</div>

<script>
  // Tampilkan field nominal hanya jika Paket Exclusive dipilih
  const paketRadios = document.querySelectorAll('input[name="paket"]');
  const nominalField = document.getElementById('nominalField');

  paketRadios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (parseInt(radio.value) === 5) {
        nominalField.style.display = 'block';
      } else {
        nominalField.style.display = 'none';
      }
    });
  });
</script>