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

$mata_kuliah = $_POST["mata_kuliah"];
$hari = $_POST["hari"];
$jam = $_POST["jam"];
$ruangan = $_POST["ruangan"];

$sql = "INSERT INTO jadwal_kuliah (mata_kuliah, hari, jam, ruangan) VALUES ('$mata_kuliah', '$hari', '$jam', '$ruangan')";

if (mysqli_query($koneksi, $sql)) {
  header("Location: jadwal.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
