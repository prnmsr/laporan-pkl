<?php
session_start();
include 'app/koneksi.php';

$base_url = 'http://localhost/sibs/';

// Memuat header, navbar, dan halaman utama
include 'views/layout/header.php';
include 'views/layout/navbar.php';
?>
<?php include 'views/pages/dashboard.php'; ?>
<?php include 'views/layout/footer.php'; ?>