<?php
require_once '../classes/Auth.php';

$auth = new Auth();
$auth->requireLogin();

$message = '';
$error = '';

if ($_POST) {
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $email = trim($_POST['email']);
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validasi
    if (empty($nama_lengkap) || empty($email)) {
        $error = 'Nama lengkap dan email harus diisi';
    } elseif (!empty($new_password) && $new_password !== $confirm_password) {
        $error = 'Konfirmasi password tidak sesuai';
    } elseif (!empty($new_password) && strlen($new_password) < 6) {
        $error = 'Password minimal 6 karakter';
    } else {
        $result = $auth->updateProfile($_SESSION['admin_id'], $nama_lengkap, $email, $current_password, $new_password);
        
        if ($result['success']) {
            $message = $result['message'];
        } else {
            $error = $result['message'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Admin - JANJI BAIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="../assets/logo.png" alt="Logo" class="h-10 w-15 object-contain" />
                    <span class="ml-4 text-gray-500">|</span>
                    <span class="ml-4 text-gray-700">Profile Admin</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="dashboard.php" class="inline-flex items-center bg-gray-300 text-gray-700 hover:bg-gray-400 px-4 py-2 rounded-lg text-sm transition">
                        ← Kembali ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-white shadow rounded-lg">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h1 class="text-xl font-semibold text-gray-900">Profile Admin</h1>
                    <p class="text-gray-600">Kelola informasi profil dan password Anda</p>
                </div>

                <div class="p-6">
                    <?php if ($message): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <?php echo htmlspecialchars($message); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($error): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <?php echo htmlspecialchars($error); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" required 
                                       value="<?php echo isset($_POST['nama_lengkap']) ? htmlspecialchars($_POST['nama_lengkap']) : htmlspecialchars($_SESSION['admin_nama']); ?>"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input type="email" name="email" required 
                                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : htmlspecialchars($_SESSION['admin_email']); ?>"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                            </div>
                        </div>

                        <div class="border-t pt-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Ganti Password (Opsional)</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Password Lama</label>
                                    <input type="password" name="current_password" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                           placeholder="Masukkan password lama">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Password Baru</label>
                                    <input type="password" name="new_password" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                           placeholder="Masukkan password baru">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                                    <input type="password" name="confirm_password" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                           placeholder="Konfirmasi password baru">
                                </div>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">* Kosongkan jika tidak ingin mengubah password</p>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="dashboard.php" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-300 transition duration-200">
                                Batal
                            </a>
                            <button type="submit" class="px-6 py-3 bg-[#01B4BB] hover:bg-blue-700 text-white rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>