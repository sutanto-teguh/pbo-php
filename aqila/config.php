<?php
$host = 'localhost';  // Host
$username = 'root';   // Username
$password = '123321';       // Password
$dbname = 'myweb'; // Nama Database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>