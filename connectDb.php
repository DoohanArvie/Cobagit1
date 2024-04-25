<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat Koneksi 
$conn = new mysqli($servername, $username, $password);

// Cek Kondisi Koneksi
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil terhubung";
$conn->close();
?>