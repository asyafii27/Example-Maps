<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "sig";

// Membuat koneksi menggunakan MySQLi
$koneksi = new mysqli($host, $user, $pass, $name);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Pilih database
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>
                