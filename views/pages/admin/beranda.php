<?php include '../../layout/header.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBS | Beranda</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/sibs/assets/img/logo-sibs.png" type="image/x-icon">
</head>
<!-- Footer with specific class -->
<body>
    <div class="container-admin">
        <!-- Navbar Section -->
        <div class="navbar">
            <span class="username">Welcome, Admin</span>
            <a href="../../../logout.php" class="logout">Logout</a>
        </div>
        
        <!-- Logo and Desa Tabongo -->
        <div class="logo-desa">
            <img src="path/to/logo.png" alt="Logo Desa Tabongo" class="logo">
            <span class="desa-name">Desa Tabongo</span>
        </div>
        
        <!-- Additional Content Section -->
        <div class="content">
            <!-- Content goes here -->
        </div>
    </div>
    <footer class="admin-footer">
        <p> 
            <span class="copyright">Copyright &copy; <?php echo date("Y"); ?></span> 
            <a href="https://dinsos.tanahbumbukab.go.id/" target="_blank">Dinas Sosial</a>.
            <span class="reserved">All rights reserved.</span>
        </p>
    </footer>
</body>
