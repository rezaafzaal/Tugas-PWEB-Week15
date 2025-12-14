<?php


$host = "localhost:3307";
$user = "root";     
$pass = "";          
$db   = "informasi_siswa"; 

// Buat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database GAGAL: " . $koneksi->connect_error);
}

$koneksi->set_charset("utf8");
?>
