<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat Koneksi 
$conn = mysqli_connect($servername, $username, $password);

// Cek Kondisi Koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil terhubung";
mysqli_close($conn);
?>