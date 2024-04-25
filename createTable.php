<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek kondisi koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// perintah sql untuk membuat tabel
$sql = "CREATE TABLE anggota_perpus (
id_anggota INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
alamat VARCHAR(200) NOT NULL,
jenis_kelamin VARCHAR(16) NOT NULL,
agama VARCHAR(16) NOT NULL,
asal_sekolah VARCHAR(64) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Tabel anggota_perpus berhasil dibuat";
} else {
  echo "Tabel gagal dibuat: " . mysqli_error($conn);
}

mysqli_close($conn);
?>