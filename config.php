<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sibs";

$conn = new mysqli("$host", "$user", "", "$dbname");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>