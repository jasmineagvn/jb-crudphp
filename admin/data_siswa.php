<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "janjibaik_db");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Proses update jika form modal disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_id'])) {
    $id = intval($_POST['edit_id']);
    $nama = $_POST['nama_lengkap'];
    $nik = $_POST['nik'];
    $kelas = $_POST['kelas_dituju'];
    $jk = $_POST['jenis_kelamin'];

    if (!empty($nama) && !empty($nik) && !empty($kelas) && !empty($jk)) {
        $stmt = $koneksi->prepare("UPDATE siswa SET nama_lengkap=?, nik=?, kelas_dituju=?, jenis_kelamin=? WHERE id=?");
        $stmt->bind_param("ssssi", $nama, $nik, $kelas, $jk, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['update_success'] = "Data siswa berhasil diperbarui.";
        } else {
            $_SESSION['update_error'] = "Tidak ada perubahan data atau update gagal.";
        }
    } else {
        $_SESSION['update_error'] = "Semua field harus diisi!";
    }
    header("Location: data_siswa.php");
    exit;
}

// Ambil data siswa berdasarkan pencarian jika ada
if ($search !== '') {
    $stmt = $koneksi->prepare("SELECT * FROM siswa WHERE nama_lengkap LIKE ?");
    $like_search = "%$search%";
    $stmt->bind_param("s", $like_search);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $koneksi->query("SELECT * FROM siswa");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa - JANJI BAIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="bg-white shadow-md fixed top-0 w-full z-10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img src="../assets/logo.png" alt="Logo" class="h-10 w-15 object-contain" />
            <span class="text-gray-400">|</span>
            <span class="text-gray-600">Data Siswa</span>
        </div>
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-2">
                <div class="w-9 h-9 bg-[#01B4BB] rounded-full flex items-center justify-center text-white font-semibold">
                    <?= strtoupper(substr($_SESSION['admin_nama'], 0, 1)); ?>
                </div>
                <span class="text-gray-700">Halo, <?= htmlspecialchars($_SESSION['admin_nama']); ?></span>
            </div>
            <a href="profile.php" class="bg-gray-600 hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm flex items-center">
                Profile
            </a>
            <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-md text-sm flex items-center">
                Logout
            </a>
        </div>
    </div>
</header>

<main class="pt-24 px-6 pb-10 max-w-6xl mx-auto">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-[#01B4BB] mb-4">Data Siswa</h2>

        <!-- Form Pencarian -->
        <form method="get" class="mb-6 flex space-x-2">
            <input
                type="text"
                name="search"
                placeholder="Cari nama siswa..."
                value="<?= htmlspecialchars($search) ?>"
                class="flex-grow border border-gray-300 rounded px-3 py-2"
            />
            <button type="submit" class="bg-[#01B4BB] text-white px-4 py-2 rounded hover:bg-blue-600">
                Cari
            </button>
            <a href="data_siswa.php" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Reset</a>
        </form>

        <!-- Flash Message -->
        <?php if (isset($_SESSION['update_success'])): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                <?= $_SESSION['update_success']; unset($_SESSION['update_success']); ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['update_error'])): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= $_SESSION['update_error']; unset($_SESSION['update_error']); ?>
            </div>
        <?php endif; ?>

        <!-- Tabel Data -->
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-blue-100 text-gray-700">
                <tr>
                    <th class="text-left py-3 px-4 border-b">No</th>
                    <th class="text-left py-3 px-4 border-b">Nama</th>
                    <th class="text-left py-3 px-4 border-b">NIK</th>
                    <th class="text-left py-3 px-4 border-b">Kelas</th>
                    <th class="text-left py-3 px-4 border-b">Jenis Kelamin</th>
                    <th class="text-left py-3 px-4 border-b">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($result->num_rows > 0): $no = 1; while ($row = $result->fetch_assoc()): ?>
                    <tr class="even:bg-gray-50">
                        <td class="py-3 px-4 border-b text-gray-700"><?= $no++; ?></td>
                        <td class="py-3 px-4 border-b font-medium"><?= htmlspecialchars($row['nama_lengkap']); ?></td>
                        <td class="py-3 px-4 border-b"><?= htmlspecialchars($row['nik']); ?></td>
                        <td class="py-3 px-4 border-b"><?= htmlspecialchars($row['kelas_dituju']); ?></td>
                        <td class="py-3 px-4 border-b"><?= htmlspecialchars($row['jenis_kelamin']); ?></td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="detail_siswa.php?id=<?= $row['id']; ?>"
                                   class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold hover:bg-green-200">
                                    Detail
                                </a>
                                <button
                                    class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold hover:bg-blue-200 edit-button"
                                    data-id="<?= $row['id']; ?>"
                                    data-nama="<?= htmlspecialchars($row['nama_lengkap']); ?>"
                                    data-nik="<?= htmlspecialchars($row['nik']); ?>"
                                    data-kelas="<?= htmlspecialchars($row['kelas_dituju']); ?>"
                                    data-jk="<?= htmlspecialchars($row['jenis_kelamin']); ?>">
                                    Edit
                                </button>
                                <button
                                    class="hapus-button bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold hover:bg-red-200"
                                    data-id="<?= $row['id']; ?>">
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endwhile; else: ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-500">Data tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-6 text-left">
        <a href="dashboard.php" class="inline-flex items-center bg-gray-300 text-gray-700 hover:bg-gray-400 px-4 py-2 rounded-lg text-sm transition">
            ← Kembali ke Dashboard
        </a>
    </div>
</main>

<!-- Modal Edit -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
        <h3 class="text-lg font-semibold mb-4">Edit Data Siswa</h3>
        <form method="post" id="editForm" class="space-y-4">
            <input type="hidden" name="edit_id" id="edit_id" />
            <div>
                <label class="block mb-1 font-medium">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" required class="w-full border border-gray-300 rounded px-3 py-2" />
            </div>
            <div>
                <label class="block mb-1 font-medium">NIK</label>
                <input type="text" name="nik" id="nik" required class="w-full border border-gray-300 rounded px-3 py-2" />
            </div>
            <div>
                <label class="block mb-1 font-medium">Kelas Dituju</label>
                <input type="text" name="kelas_dituju" id="kelas_dituju" required class="w-full border border-gray-300 rounded px-3 py-2" />
            </div>
            <div>
                <label class="block mb-1 font-medium">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" required class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="flex justify-end space-x-3 mt-6">
                <button type="button" id="cancelBtn" class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded">Batal</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Script Modal & Hapus dengan SweetAlert2 -->
<script>
document.querySelectorAll('.edit-button').forEach(button => {
    button.addEventListener('click', () => {
        document.getElementById('editModal').classList.remove('hidden');
        document.getElementById('editModal').classList.add('flex');
        document.getElementById('edit_id').value = button.dataset.id;
        document.getElementById('nama_lengkap').value = button.dataset.nama;
        document.getElementById('nik').value = button.dataset.nik;
        document.getElementById('kelas_dituju').value = button.dataset.kelas;
        document.getElementById('jenis_kelamin').value = button.dataset.jk;
    });
});
document.getElementById('cancelBtn').addEventListener('click', () => {
    document.getElementById('editModal').classList.add('hidden');
    document.getElementById('editModal').classList.remove('flex');
});
window.addEventListener('click', e => {
    const modal = document.getElementById('editModal');
    if (e.target === modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
});

// Hapus dengan SweetAlert2
document.querySelectorAll('.hapus-button').forEach(button => {
    button.addEventListener('click', (e) => {
        const id = button.dataset.id;
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e3342f',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `hapus_siswa.php?id=${id}`;
            }
        });
    });
});
</script>

</body>
</html>
