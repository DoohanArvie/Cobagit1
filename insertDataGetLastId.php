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
VALUES ('Jeret Murpala', 'Jl. Gamelab Indonesia No. 9, Salatiga', 'perempuan', 'Islam', 'SMK 32 Gamelab')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "Berhasil di Tambah" .$last_id;
} else {
    echo "Error : ".$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>