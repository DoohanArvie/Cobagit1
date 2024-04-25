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

$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Charly Burley', 'Jl. Gamelab Indonesia No. 9, Salatiga', 'Laki-laki', 'Kristen', 'SMK 40 Gamelab'),
('Delta Malta', 'Jl. Gamelab Indonesia No. 9, Salatiga', 'Laki-laki', 'Islam', 'SMK 32 Gamelab'),
('Gamma Lumela', 'Jl. Gamelab Indonesia No. 9, Salatiga', 'perempuan', 'Islam', 'SMK 32 Gamelab')";


if (mysqli_multi_query($conn, $sql)) {
    echo "Berhasil di Tambah";
} else {
    echo "Error : ".$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>