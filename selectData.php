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

$sql = "SELECT id_anggota, nama, alamat, jenis_kelamin, agama, asal_sekolah FROM anggota_perpus";
$result = mysqli_query($conn, $sql);
echo "======================================================================================================================\n";
echo "id anggota | Nama lengkap  |           Alamat Lengkap            |  Jenis Kelamin  |   Agama    |       Asal Sekolah  |\n";
echo "======================================================================================================================\n";
if (mysqli_num_rows($result) > 0) {
  // Hasil data dari setiap baris
  while($row = mysqli_fetch_assoc($result)) {
    
    echo "    " .$row["id_anggota"]."      ". $row["nama"]."    ". $row["alamat"]. "   " . $row["jenis_kelamin"]. "        " . $row["agama"]."       ".$row["asal_sekolah"]. "\n";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>