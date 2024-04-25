<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password);
// Cek Kondisi Koneksi
if (!$conn) {
  die("Koneksi Gagal: " . mysqli_connect_error());
}

// Membuat Database
$sql = "CREATE DATABASE perpus";
if (mysqli_query($conn, $sql)) {
  echo "Database berhasil dibuat";
} else {
  echo "Gagal terhubung dengan database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>