<?php
session_start();
include 'app/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    // Pastikan koneksi berhasil sebelum query
    if (!$koneksi) {
        die("Koneksi database tidak tersedia.");
    }

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa jika query gagal
    if (!$result) {
        die("Query gagal: " . mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);

    if ($data) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        // Redirect sesuai peran (role)
        if ($data['role'] == "Admin") {
            header("Location: views/pages/admin/beranda.php");
        } else {
            header("Location: views/pages/user/beranda.php");
        }
        exit();
    } else {
        echo "<script>alert('Login gagal! Username atau password salah.'); window.location='login.php';</script>";
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIBS | Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo-sibs.png" type="image/x-icon">
</head>
<body class="body-layout auth-container">
    <div class="login-container">
        <img src="assets/img/logo-sibs-hijau.png" alt="Logo Tanbu">
        <h3>Sistem Informasi Bantuan Sosial <br> Kabupaten Tanah Bumbu</h3>
        <form action="" method="POST">
            <div class="form-input">
                <input type="text" name="username" placeholder="Masukkan Username" required>
            </div>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                <span class="toggle-password" onclick="togglePassword()">👁</span>
            </div>
            <div class="form-input">
                <select name="role" required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Pengguna">Pengguna</option>
                </select>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
