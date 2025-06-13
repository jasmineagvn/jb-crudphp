<?php
// kolaborasi_process.php

$conn = mysqli_connect("localhost", "root", "", "janjibaik_db");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_lembaga = $_POST['nama_lembaga'];
$no_hp = $_POST['no_hp'];
$jenis_kolaborasi = $_POST['jenis_kolaborasi'];
$deskripsi = $_POST['deskripsi'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO kolaborasi (
    email, nama_lengkap, nama_lembaga, no_hp, jenis_kolaborasi, deskripsi, pesan
) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "sssssss", $email, $nama_lengkap, $nama_lembaga, $no_hp, $jenis_kolaborasi, $deskripsi, $pesan);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Terima kasih! Kolaborasi berhasil dikirim.'); window.location='../index.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "'); window.history.back();</script>";
}
?>
