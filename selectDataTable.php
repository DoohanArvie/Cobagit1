<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT nama, agama, asal_sekolah FROM anggota_perpus WHERE nama LIKE '%ta%' ORDER BY nama";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border=1><tr><th>Nama Lengkap</th><th>Agama</th><th>Asal Sekolah</th></tr>";
  // hasil tamdpilan datanya
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["nama"]."</td><td>".$row["agama"]."</td><td>".$row["asal_sekolah"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>