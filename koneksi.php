<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'sibs';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die('Koneksi Database Gagal: ' . $mysqli->connect_error);
}
?>
