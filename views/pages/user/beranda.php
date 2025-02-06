<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Pengguna') {
    header("Location: ../../../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBS | Beranda</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/sibs/assets/img/logo-sibs.png" type="image/x-icon">
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Ini adalah halaman untuk User.</p>
    <a href="../../../logout.php">Logout</a>
</body>
</html>
