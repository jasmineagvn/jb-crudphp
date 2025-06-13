-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2025 at 02:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janjibaik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif',
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `status`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$SYKFGsjblJXY5P0qEu0n3.v/WGyDkkOH8eEyFirM.vQ9kAw68HQQe', 'Admin', 'admin@example.com', 'aktif', '2025-06-12 17:51:56', '2025-06-04 20:41:30', '2025-06-12 10:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `title`, `image`, `url`, `description`, `created_at`) VALUES
(11, 'MNC University Gandeng Sekolah Janji Baik Gelar Program Pengabdian kepada Masyarakat di Tangsel', 'uploads/berita/684abfd9a637f-news3.png', 'https://edukasi.sindonews.com/read/1329433/212/mnc-university-gandeng-sekolah-janji-baik-gelar-program-pengabdian-kepada-masyarakat-di-tangsel-1708999368', 'MNC University (MNCU) bekerja sama dengan Sekolah Janji Baik melaksanakan kegiatan Pengabdian...', '2025-06-12 16:47:25'),
(12, 'Self Kindness : Berbagi Kebaikan Untuk Diri Bersama Janji Baik', 'uploads/berita/684abfa412eab-news2.png', 'https://jurnalpost.com/self-kindness-berbagi-kebaikan-untuk-diri-bersama-janji-baik/66750/', 'Minggu, 24 Maret 2024 – Janji Baik, Startup yang bergerak di bidang Education Tech & Crowdfunding baru-baru ini melaksanakan salah satu program...', '2025-06-12 16:49:49'),
(13, 'Bulan Baik: Berbagi Kebaikan Bersama Sekolah Janji Baik', 'uploads/berita/684ab93a1b954-news1.png', 'https://www.kompasiana.com/muhamadsofiyudin1016/6605248f1470935f3a2b9c02/bulan-baik-berbagi-kebaikan-bersama-sekolah-janji-baik', 'Sekolah Janji Baik merupakan sekolah gratis berbasis digital yang memungkinkan peserta didik yang memiliki keterbatasan ekonomi dapat melanjutkan pendidikan di sekolah.', '2025-06-12 17:52:25'),
(14, 'Peringati Hari Peduli Sampah Nasional, Janji Baik Gerakkan Siswa Kelola Sampah', 'uploads/berita/684ac003a936b-news4.png', 'https://pojokpublik.id/daerah/banten/10721/janji-baik-gelar-kegiatan-perigatan-hari-peduli-sampah-nasional-2023/', 'Dalam rangka memperingati Hari Peduli Sampah Nasional (HPSN) 2023 yang jatuh pada tanggal 21 Februari 2023, Janji Baik turut mengadakan...', '2025-06-12 18:54:43'),
(15, 'Startup Janji Baik Hadirkan Sekolah Gratis bagi Siswa Prasejahtera', 'uploads/berita/684ac02a24128-news5.png', 'https://www.kompas.com/edu/read/2022/04/20/155427271/startup-janji-baik-hadirkan-sekolah-gratis-bagi-siswa-prasejahtera', 'Pendidikan merupakan hak fundamental bagi setiap anak. Pada kenyataannya, masih banyak dijumpai anak-anak Indonesia yang putus sekolah dikarenakan faktor ekonomi. Melalui program “Janji Baik”, sejumlah anak...', '2025-06-12 18:55:22'),
(16, 'Sekolah Gratis untuk Anak-anak Tidak Mampu', 'uploads/berita/684ac0518bf51-news6.png', 'https://www.beritasatu.com/photo/80163/sekolah-gratis-untuk-anak-anak-tidak-mampu', 'Sejumlah anak muda komunitas Janji Baik yang fokus pada kegiatan pendidikan memberikan edukasi pendidikan dan permainan kepada...', '2025-06-12 18:56:01'),
(17, 'Gandeng UMB dan Pemkot Tangsel, Sekolah Janji Baik Kolaborasi Program Kesejahteraan Psikologis', 'uploads/berita/684ac0ade2bfb-news7.png', 'https://faktabanten.co.id/tangerang/gandeng-umb-dan-pemkot-tangsel-sekolah-janji-baik-kolaborasi-program-kesejahteraan-psikologis/', 'Program ini terdiri dari dua sesi edukasi dan pendampingan yang dipandu oleh dosen psikologi UMB untuk guru, relawan, dan siswa Sekolah Janji Baik, yakni sesi pertama pada 16 Februari 2025 untuk...', '2025-06-12 18:57:33'),
(18, 'Peringati Suicide Prevention Month, Janji Baik Menyelenggarakan Tentang Pencegahan Bunuh Diri', 'uploads/berita/684ac10ea92ea-news8.png', 'https://www.kompasiana.com/dianariyanisurya21/66f7f74834777c21856c4412/peringati-suicide-prevention-month-janji-baik-menyelenggarakan-tentang-pencegahan-bunuh-diri', 'Dalam rangka memperingati World Suicide Prevention Month, Janji Baik mengadakan seminar pada 22 September 2024 di SDN 02 Perigi, Tangerang Selatan, dengan tema Jangan dibiarkan pentingnya...', '2025-06-12 18:59:10'),
(19, 'Janji Baik Kenalkan Relawan Difabel Inspiratif', 'uploads/berita/684ac1c68fe0a-news9.png', 'https://banpos.co/2023/02/19/janji-baik-kenalkan-relawan-difabel-inspiratif/', 'Sekolah Janji Baik baru-baru ini kembali menunjukkan eksistensinya kepada masyarakat luas dengan membuktikan bahwa menjadi difabel bukanlah sebuah keterbatasan. Dalam laman Instagramnya, @janjibaik.id memperkenalkan...', '2025-06-12 19:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `thumbnail`, `created_at`) VALUES
(3, 'Ulang Tahun Janji Baik', 'Setiap gambar adalah jejak perjalanan penuh makna. Inilah momen-momen hangat ulang tahun Janji Baik yang dirayakan dengan syukur dan harapan. Mari terus melangkah bersama, berbagi kebaikan tanpa henti!', '1749454910-bg-galeri.png', '2025-06-05 18:43:05'),
(5, 'Pesta Ide Relawan', 'Setiap gambar menyimpan kisah semangat dan kolaborasi. Inilah momen-momen seru dan penuh ide yang telah kami rayakan bersama. Mari terus menyalakan inspirasi dan bergerak bersama untuk perubahan.', '1749454572-bg-galleri.jpg', '2025-06-06 02:32:55'),
(6, 'Kegiatan Belajar Mengajar', 'Setiap gambar adalah cerita tentang semangat belajar dan kebersamaan. Inilah potret momen-momen berharga saat kita berbagi ilmu, ide, dan inspirasi. Mari terus tumbuh, belajar, dan bergerak bersama untuk masa depan yang lebih baik.', '1749454373-bg-belajar.png', '2025-06-06 06:43:50'),
(7, 'Graduation Siswa Janji Baik', 'Setiap gambar menangkap langkah besar menuju masa depan. Inilah momen kelulusan yang penuh haru, bangga, dan harapan. Mari rayakan akhir yang indah dan awal dari perjalanan baru yang menjanjikan!', '1749455058-gambar3.png', '2025-06-09 07:44:18'),
(8, 'Kelas Kreasi', 'Setiap gambar adalah bukti bahwa imajinasi bisa diwujudkan. Inilah keseruan di kelas kreasi—tempat tawa, warna, dan ide-ide luar biasa bertemu. Mari terus berkarya dan tumbuhkan kreativitas bersama!', '1749455345-gambar2.png', '2025-06-09 07:49:05'),
(9, 'Peringatan Hari Nasional', 'Setiap gambar mengabadikan tekad kami untuk terus menepati Janji Baik bagi bangsa. Dalam semangat Hari Nasional, kami merayakan kebersamaan, mengenang perjuangan, dan melangkah maju demi Indonesia yang lebih baik.', '1749455536-gambar1.png', '2025-06-09 07:52:16'),
(10, 'Pengabdian Kepada Masyarakat', 'Setiap gambar merekam kolaborasi penuh makna antara Janji Baik dan program Pengabdian kepada Masyarakat di berbagai kampus. Bersama, kami menghadirkan aksi nyata, belajar dari masyarakat, dan menepati janji untuk terus membawa kebaikan yang berdampak.', '1749457738-gambar1.png', '2025-06-09 08:28:58'),
(11, 'Janji Baik Berkelana', 'Setiap gambar merekam kolaborasi penuh makna antara Janji Baik dan program Pengabdian kepada Masyarakat di berbagai kampus. Bersama, kami menghadirkan aksi nyata, belajar dari masyarakat, dan menepati janji untuk terus membawa kebaikan yang berdampak.', '1749457849-bg-card.jpg', '2025-06-09 08:30:49'),
(12, 'Catatan Akhir Kebaikan', 'Setiap gambar merekam kolaborasi penuh makna antara Janji Baik dan program Pengabdian kepada Masyarakat di berbagai kampus. Bersama, kami menghadirkan aksi nyata, belajar dari masyarakat, dan menepati janji untuk terus membawa kebaikan yang berdampak.', '1749457899-bg-card.jpg', '2025-06-09 08:31:39'),
(13, 'Workshop Siswa', 'Setiap gambar merekam kolaborasi penuh makna antara Janji Baik dan program Pengabdian kepada Masyarakat di berbagai kampus. Bersama, kami menghadirkan aksi nyata, belajar dari masyarakat, dan menepati janji untuk terus membawa kebaikan yang berdampak.', '1749458009-bg-card.jpg', '2025-06-09 08:33:29'),
(14, 'Bulan Baik Berbagi Takjil', 'Setiap gambar merekam kolaborasi penuh makna antara Janji Baik dan program Pengabdian kepada Masyarakat di berbagai kampus. Bersama, kami menghadirkan aksi nyata, belajar dari masyarakat, dan menepati janji untuk terus membawa kebaikan yang berdampak.', '1749458074-bg-card.png', '2025-06-09 08:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id` int(11) NOT NULL,
  `galeri_id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_foto`
--

INSERT INTO `galeri_foto` (`id`, `galeri_id`, `nama_file`) VALUES
(20, 6, '1749454373-kbm1.png'),
(21, 6, '1749454373-kbm2.png'),
(22, 6, '1749454373-kbm3.png'),
(23, 6, '1749454373-kbm4.png'),
(24, 6, '1749454373-kbm5.png'),
(25, 5, '1749454572-gambar1.png'),
(26, 5, '1749454593-gambar2.png'),
(27, 5, '1749454604-gambar3.png'),
(28, 5, '1749454604-gambar4.png'),
(29, 5, '1749454604-gambar5.png'),
(30, 5, '1749454616-gambar6.png'),
(31, 5, '1749454616-gambar9.png'),
(32, 5, '1749454616-gambar11.png'),
(33, 3, '1749454704-gambar1.png'),
(34, 3, '1749454894-1.png'),
(35, 3, '1749454910-2.png'),
(36, 3, '1749454910-3.png'),
(37, 3, '1749454910-4.png'),
(38, 3, '1749454910-5.png'),
(39, 3, '1749454910-6.png'),
(40, 3, '1749454927-gambar7.png'),
(41, 7, '1749455058-gambar1.png'),
(42, 7, '1749455081-gambar2.png'),
(43, 7, '1749455081-gambar3.png'),
(44, 7, '1749455081-gambar4.png'),
(45, 7, '1749455081-gambar5.png'),
(46, 8, '1749455345-gambar1.png'),
(47, 8, '1749455365-gambar4.png'),
(48, 8, '1749455365-gambar5.png'),
(49, 8, '1749455365-gambar6.png'),
(50, 8, '1749455365-gambar7.png'),
(51, 8, '1749455396-gambar10.png'),
(52, 8, '1749455396-gambar11.png'),
(53, 8, '1749455396-gambar12.png'),
(54, 8, '1749455396-gambar13.png'),
(55, 8, '1749455396-gambar14.png'),
(56, 8, '1749455396-gambar15.png'),
(57, 9, '1749455536-gambar2.png'),
(58, 9, '1749455552-gambar3.png'),
(59, 9, '1749455552-gambar4.png'),
(60, 9, '1749455552-gambar5.png'),
(61, 9, '1749455552-gambar6.png'),
(62, 9, '1749455563-gambar7.png'),
(63, 9, '1749455563-gambar9.png'),
(64, 10, '1749457738-gambar2.png'),
(65, 10, '1749457738-gambar3.png'),
(66, 10, '1749457738-video2.png'),
(67, 10, '1749457738-video3.png'),
(68, 11, '1749457849-bg-card.jpg'),
(69, 12, '1749457899-bg-card.jpg'),
(70, 13, '1749458009-bg-card.jpg'),
(71, 14, '1749458075-bg-card.png'),
(72, 3, '1749465398-3rd.jpg'),
(73, 3, '1749465398-3rd-Anniv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kolaborasi`
--

CREATE TABLE `kolaborasi` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `jenis_kolaborasi` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kolaborasi`
--

INSERT INTO `kolaborasi` (`id`, `email`, `nama_lengkap`, `nama_lembaga`, `no_hp`, `jenis_kolaborasi`, `deskripsi`, `pesan`, `created_at`) VALUES
(6, 'danisaarwanti16@gmail.com', 'Danisa Arwanti', 'alonica organization', '081216135113', 'Magang', 'Melakukan magang selama 3 bulan', 'Tidak Ada', '2025-06-09 10:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `divisi` enum('canvas think','human responsibility','creative seeker','tutor & caretaker','growth maker','student glory','digital heroes','counselor') DEFAULT NULL,
  `sosial_media` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `pengalaman` text DEFAULT NULL,
  `tanggung_jawab` text DEFAULT NULL,
  `kesibukan` varchar(100) DEFAULT NULL,
  `kritik_saran` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `alamat`, `divisi`, `sosial_media`, `pendidikan`, `alasan`, `pengalaman`, `tanggung_jawab`, `kesibukan`, `kritik_saran`, `created_at`) VALUES
(6, 'Miftahul Rizkika Pasha', 'Aul', 'Balaraja', '2004-10-23', '081227072304', 'Balaraja, banten.', 'tutor & caretaker', '@miptahulrp', 'SMA - IPA', 'Ingin menambah pengalaman', 'Tidak Ada', 'Tidak Ada', 'kuliah', 'Tidak Ada', '2025-06-09 11:24:25'),
(9, 'asxasxas', 'asxsaxasx', 'caxasxas', '0121-02-12', 'ascxasxsax', 'axasdasdas', 'growth maker', 'asxaxa', 'axaxqqw', 'dadadqwdq', 'dqqdqdqwdeq', 'rqrqrqweqweq', 'dqeqwewqe', 'qeqweqweqwe', '2025-06-12 12:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tingkatan_dituju` enum('Paket A','Paket B','Paket C') DEFAULT NULL,
  `kelas_dituju` varchar(10) DEFAULT NULL,
  `kelas_terakhir` varchar(50) DEFAULT NULL,
  `status_keluarga` enum('Anak Kandung','Anak Angkat','Anak Sambung/Tiri') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status_tempat_tinggal` enum('Sewa','Milik Pribadi','Tinggal dengan Saudara') DEFAULT NULL,
  `kwh_listrik` enum('450','900','1300','2200','3500 ke atas') DEFAULT NULL,
  `riwayat_penyakit` text DEFAULT NULL,
  `alasan_melanjutkan` text DEFAULT NULL,
  `ayah_nama` varchar(100) DEFAULT NULL,
  `ayah_agama` varchar(20) DEFAULT NULL,
  `ayah_pendidikan` enum('Tidak Sekolah','SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D1/D2/D3','S1/Sarjana','S2/Magister','S3/Doktor') DEFAULT NULL,
  `ayah_pekerjaan` varchar(50) DEFAULT NULL,
  `ayah_penghasilan` varchar(50) DEFAULT NULL,
  `ayah_riwayat_penyakit` text DEFAULT NULL,
  `ayah_alamat` text DEFAULT NULL,
  `ayah_nohp` varchar(15) DEFAULT NULL,
  `ibu_nama` varchar(100) DEFAULT NULL,
  `ibu_agama` varchar(20) DEFAULT NULL,
  `ibu_pendidikan` varchar(30) DEFAULT NULL,
  `ibu_pekerjaan` varchar(50) DEFAULT NULL,
  `ibu_penghasilan` varchar(50) DEFAULT NULL,
  `ibu_riwayat_penyakit` text DEFAULT NULL,
  `ibu_alamat` text DEFAULT NULL,
  `ibu_nohp` varchar(15) DEFAULT NULL,
  `wali_nama` varchar(100) DEFAULT NULL,
  `wali_agama` varchar(20) DEFAULT NULL,
  `wali_pendidikan` varchar(30) DEFAULT NULL,
  `wali_pekerjaan` varchar(50) DEFAULT NULL,
  `wali_penghasilan` varchar(50) DEFAULT NULL,
  `wali_riwayat_penyakit` text DEFAULT NULL,
  `wali_alamat` text DEFAULT NULL,
  `wali_nohp` varchar(15) DEFAULT NULL,
  `kontak_nama` varchar(100) DEFAULT NULL,
  `kontak_hubungan` varchar(50) DEFAULT NULL,
  `kontak_alamat` text DEFAULT NULL,
  `kontak_nohp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `umur`, `nik`, `tingkatan_dituju`, `kelas_dituju`, `kelas_terakhir`, `status_keluarga`, `alamat`, `status_tempat_tinggal`, `kwh_listrik`, `riwayat_penyakit`, `alasan_melanjutkan`, `ayah_nama`, `ayah_agama`, `ayah_pendidikan`, `ayah_pekerjaan`, `ayah_penghasilan`, `ayah_riwayat_penyakit`, `ayah_alamat`, `ayah_nohp`, `ibu_nama`, `ibu_agama`, `ibu_pendidikan`, `ibu_pekerjaan`, `ibu_penghasilan`, `ibu_riwayat_penyakit`, `ibu_alamat`, `ibu_nohp`, `wali_nama`, `wali_agama`, `wali_pendidikan`, `wali_pekerjaan`, `wali_penghasilan`, `wali_riwayat_penyakit`, `wali_alamat`, `wali_nohp`, `kontak_nama`, `kontak_hubungan`, `kontak_alamat`, `kontak_nohp`) VALUES
(18, 'acop', 'Laki-laki', 'kebumen', '2025-06-06', 1, '12171917361910', NULL, 'Kelas 1', 'smp', 'Anak Kandung', 'Jln H Nurleman', 'Milik Pribadi', '900', '-', 'ingin dapat ijazah', 'joko', 'Islam', '', 'pns', '1000000', '-', 'jalan h nurleman', '0867618163618', 'siti', 'islam', 'Tidak sekolah', 'pns', '10000000', '-', 'jalan h nurleman', '0872663180', 'lini', 'islam', 'SMA/SMK', 'pns', '10000000', '-', 'jalan h nurleman', '0836289173619', 'sukma', 'Tante', 'jalan h nurleman', '08577482776'),
(20, 'juju', 'Laki-laki', 'ngawi', '2025-06-06', 1, '12171917361910', NULL, 'Kelas 2', 'sma', 'Anak Kandung', 'Jln H Nurleman', 'Milik Pribadi', '900', '-', 'ingin dapat ijazah', 'wandi', 'islam', '', 'pns', '1000000', '-', 'Nurleman street', '0867618163618', 'gini', 'islam', 'Diploma', 'pns', '10000000', '-', 'Nurleman street', '0872663180', 'Ardi Ansyah', 'islam', 'Tidak sekolah', 'pns', '10000000', '-', 'Nurleman street', '0836289173619', 'Ardi Ansyah', 'kakak', 'Nurleman street', '08577482776'),
(21, 'Dina', 'Perempuan', 'Jakarta', '2003-06-26', 21, '367188675547', NULL, 'Kelas 3', '2', 'Anak Kandung', 'Pamulang', 'Milik Pribadi', '1300', 'tidak ada', 'ingin memiliki ijazah engkap', 'Hadi', 'Islam', '', 'Karyawan', '2000000', 'Asma', 'Pamulang', '087869506678', 'Ida', 'Islam', 'Sarjana', 'ibu rumah tangga', '4500000', 'tidak ada', 'Pamulang', '08765470098', 'Rina', 'islam', 'Pascasarjana', 'Barista', '4000000', 'Tidak ada', 'Pamulang', '098976548890', 'Soni', 'Om', 'Pamulang', '02167568897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_id` (`galeri_id`);

--
-- Indexes for table `kolaborasi`
--
ALTER TABLE `kolaborasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `kolaborasi`
--
ALTER TABLE `kolaborasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD CONSTRAINT `galeri_foto_ibfk_1` FOREIGN KEY (`galeri_id`) REFERENCES `galeri` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
