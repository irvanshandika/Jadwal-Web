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

$id = $_GET['id'];

$sql = "DELETE FROM jadwal_kuliah WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
//   echo '<h1 class="text text-center">Data berhasil dihapus.</h1>';
//   echo "<br>";
//   echo '<a href="index.php"><h2 class="text-center">Kembali</h2></a>';
header("Location: jadwal.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>