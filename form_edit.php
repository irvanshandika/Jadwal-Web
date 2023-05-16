<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css" />
    <link rel="shortcut icon" href="./assets/images/post-it.png" type="image/x-icon" />
    <link href="/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/src/style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title>Edit Data Jadwal</title>
  </head>
  <body class="bg-[#C9EEFF]">
    <?php
    $host = "localhost"; //alamat server
    $user = "root"; //username database
    $pass = ""; //password database
    $db = "jadwal_kuliah"; //nama database


$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

  $id = $_GET['id'];

  $sql = "SELECT * FROM jadwal_kuliah WHERE id=$id";
  $result = mysqli_query($koneksi, $sql);

  if (mysqli_num_rows($result) >
    0) { $row = mysqli_fetch_assoc($result); } else { echo "Tidak ada data."; } mysqli_close($koneksi); ?>
    <h1 class="text-black text-center pb-16 pt-16 lg:text-4xl max-md:text-xl">Edit Jadwal</h1>
    <form class="lg:!w-[50%] m-auto max-md:!w-[90%] text-black bg-[#fff] rounded-[5px] shadow-black shadow-md p-[20px] mb-[20px]" action="edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
      <div class="mb-3">
        <label class="block mb-5px font-bold">Mata Kuliah:</label>
        <input class="lg:!w-[47vw] max-md:!w-[100%] p-2 rounded-[10px] border-[1px] border-[solid] border-[#ccc]" type="text" name="mata_kuliah" value="<?php echo $row['mata_kuliah']; ?>" />
      </div>
      <div class="mb-3">
        <label class="block mb-5px font-bold">Hari:</label>
        <input class="lg:!w-[47vw] max-md:!w-[100%] p-2 rounded-[10px] border-[1px] border-[solid] border-[#ccc]" type="text" name="hari" value="<?php echo $row['hari']; ?>" />
      </div>
      <div class="mb-3">
        <label class="block mb-5px font-bold">Ruangan:</label>
        <input class="lg:!w-[47vw] max-md:!w-[100%] p-2 rounded-[10px] border-[1px] border-[solid] border-[#ccc]" type="text" name="ruangan" value="<?php echo $row['ruangan']; ?>" />
      </div>
      <div class="mb-3">
        <label class="block mb-5px font-bold">Jam:</label>
        <input class="lg:!w-[47vw] max-md:!w-[100%] p-2 rounded-[10px] border-[1px] border-[solid] border-[#ccc]" type="time" name="jam" value="<?php echo $row['jam']; ?>" />
      </div>
      <button class="bg-[#99FEFF] px-3 py-3 rounded-xl hover:bg-[#94DAFF]" type="submit">Simpan</button>
    </form>
    
    <!-- Script -->
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="./src/script/index.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  </body>
</html>
