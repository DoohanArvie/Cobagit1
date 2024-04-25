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

$sql = "UPDATE anggota_perpus SET jenis_kelamin='Laki-laki' 
WHERE alamat LIKE '%Studio' and asal_sekolah LIKE '%Gamelab'";

if (mysqli_query($conn, $sql)) {
    echo "Rekord berhasil diupdate";
  } else {
    echo "Ada kesalahan update rekord: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>