<?php
session_start();
include 'app/login_cek.php';

if (isset($_SESSION['username'])) {
?>
    <script>
        alert('Anda sedang aktif, tidak dapat mengakses halaman ini!');
        window.location.href = 'dashboard';
    </script>
<?php
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIBS | Login</title>
    <link rel="shortcut icon" href="img/logo-tanbu.png" type="image/x-icon">

    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; text-align: center; }
        .login-box { width: 300px; margin: 100px auto; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 8px; }
        input { width: 90%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 20px; background: #4CAF50; color: #fff; border: none; cursor: pointer; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
    </div>
</body>
</html>
