<?php
// database.php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
