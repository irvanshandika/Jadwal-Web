<?php
// include 'koneksi.php'; //memanggil file koneksi.php
$host = "localhost"; //alamat server
$user = "root"; //username database
$pass = ""; //password database
$db = "jadwal_kuliah"; //nama database

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

$id = $_GET["id"];

$sql = "DELETE FROM jadwal_kuliah WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
  header("Location: jadwal.php?pesan=Data+Berhasil+Terhapus");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
