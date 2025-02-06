<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan user database Anda
$pass = ""; // Jika ada password, masukkan di sini
$dbname = "sibs"; // Sesuaikan dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
