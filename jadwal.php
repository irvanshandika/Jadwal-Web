<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="./dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./src/style/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/ionicons@7.1.0-0/dist/css/ionicons.min.css">
    <title>Jadwal | IF07</title>
  </head>
  <body>
    <div class="flex items-center justify-center">
      <lottie-player class="w-32 h-32 mx-1" src="https://assets1.lottiefiles.com/packages/lf20_Ssbj3iUBzB.json" background="transparent" speed="1" loop autoplay></lottie-player>
      <h1 class="text-xl font-medium">Jadwal Informatika 07</h1>
    </div>
    <!-- Tabs -->
    <ul class="flex flex-wrap text-sm font-medium justify-center text-center text-gray-500 border-b border-gray-700" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
      <li class="mr-2">
        <a href="#jadwal" aria-current="page" class="inline-block p-4 text-black hover:text-blue-600 hover:bg-gray-800 rounded-t-lg active" id="jadwal-tab" data-tabs-target="#jadwal" role="tab" aria-controls="jadwal" aria-selected="false">Jadwal</a>
      </li>
      <li class="mr-2">
        <a href="#tampil-jadwal" aria-current="page" class="inline-block p-4 rounded-t-lg text-black hover:text-blue-600 hover:bg-gray-800 active" id="tampilJadwal-tab" data-tabs-target="#tampil-jadwal" role="tab" aria-controls="tampil-jadwal" aria-selected="false">Jadwal Pengganti</a>
      </li>
      <li class="mr-2">
        <a href="#" aria-current="page" class="inline-block p-4 rounded-t-lg text-black hover:text-blue-600 hover:bg-gray-800 ">
          Settings
          <ion-icon class="w-17 px-2" name="construct"></ion-icon>
        </a>
      </li>
    </ul>
    <!-- Akhir Tabs -->
    <div id="myTabContent">
      <!-- Table -->
      <section id="jadwal" class="hidden" role="tabpanel" aria-labelledby="jadwal-tab">
        <div class="flex justify-center text-center">
          <table class="border-collapse text-sm lg:w-[50vw] text-gray-500 dark:text-gray-400 max-md:!w-[65vw] mt-[1rem]">
            <thead class="sm:text-left text-white p-3 border-none uppercase bg-gray-700">
              <tr>
                <th scope="col" class="p-3 lg:text-lg max-md:!text-[12px] text-[15px] tracking-[2px] text-center uppercase">Hari</th>
                <th scope="col" class="p-3 lg:text-lg max-md:!text-[12px] text-[15px] tracking-[2px] text-center uppercase">Waktu</th>
              <th scope="col" class="p-3 lg:text-lg max-md:!text-[12px] text-[15px] tracking-[2px] text-center uppercase">Mata Kuliah</th>
              <th scope="col" class="p-3 lg:text-lg max-md:!text-[12px] text-[15px] tracking-[2px] text-center uppercase">Ruangan</th>
            </tr>
          </thead>
          <tbody>
            <!-- Senin -->
            <tr class="border-b bg-gray-900 border-gray-700">
              <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">SENIN</th>
              <td class="text-center p-3 max-md:!text-[12px]">13.20-15.00</td>
              <td class="text-center p-3 max-md:!text-[12px]">Big Data & Predictive Analytics</td>
              <td class="text-center p-3 max-md:!text-[12px]">04.02.01</td>
            </tr>
            <tr class="border-b bg-gray-900 border-gray-700">
              <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">15.30-17.10</td>
          <td class="text-center p-3 max-md:!text-[12px]">Pemrograman Web (Teori)</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.04.08</td>
        </tr>
        <!-- Selasa -->
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">SELASA</th>
          <td class="text-center p-3 max-md:!text-[12px]">08.50-10.30</td>
          <td class="text-center p-3 max-md:!text-[12px]">Analisis Desain Sistem Informasi</td>
          <td class="text-center p-3 max-md:!text-[12px]">04.03.02</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">10.40-12.20</td>
          <td class="text-center p-3 max-md:!text-[12px]">Aljabar Linier dan Matriks</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.02.04</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">15.30-17.10 (Setelah UTS)</td>
          <td class="text-center p-3 max-md:!text-[12px]">Big Data & Predictive Analytics (Praktikum)</td>
          <td class="text-center p-3 max-md:!text-[12px]">07.03.02</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">15.30-17.10</td>
          <td class="text-center p-3 max-md:!text-[12px]">Big Data & Predictive Analytics (Teori)</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.04.07</td>
        </tr>
        <!-- Rabu -->
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">RABU</th>
          <td class="text-center p-3 max-md:!text-[12px]">08.50-10.30</td>
          <td class="text-center p-3 max-md:!text-[12px]">Pemrograman Web (Praktikum)</td>
          <td class="text-center p-3 max-md:!text-[12px]">02.04.05</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">13.20-15.00</td>
          <td class="text-center p-3 max-md:!text-[12px]">Kecerdasan Buatan (Teori)</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.02.01</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">15.30-17.10</td>
          <td class="text-center p-3 max-md:!text-[12px]">Pemrograman Basis Data</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.04.04</td>
        </tr>
        <!-- Kamis -->
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">KAMIS</th>
          <td class="text-center p-3 max-md:!text-[12px]">10.40-12.20</td>
          <td class="text-center p-3 max-md:!text-[12px]">Pendidikan Kewarganegaraan</td>
          <td class="text-center p-3 max-md:!text-[12px]">VR.01.02</td>
        </tr>
        <!-- Jumat -->
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">JUM'AT</th>
          <td class="text-center p-3 max-md:!text-[12px]">07.00-08.40</td>
          <td class="text-center p-3 max-md:!text-[12px]">Pemrograman Basis Data (Praktikum)</td>
          <td class="text-center p-3 max-md:!text-[12px]">02.04.02</td>
        </tr>
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white"></th>
          <td class="text-center p-3 max-md:!text-[12px]">08.50-10.30</td>
          <td class="text-center p-3 max-md:!text-[12px]">Analisis Desain Sistem Informasi</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.04.04</td>
        </tr>
        <!-- Sabtu -->
        <tr class="border-b bg-gray-900 border-gray-700">
          <th scope="row" class="text-center p-3 max-md:!text-[12px] text-white">SABTU</th>
          <td class="text-center p-3 max-md:!text-[12px]">08.50-10.30</td>
          <td class="text-center p-3 max-md:!text-[12px]">Riset Operasi</td>
          <td class="text-center p-3 max-md:!text-[12px]">05.02.07</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<!-- Akhir table -->
<!-- Speed Dial -->
<!-- Main modal -->
<div data-dial-init class="fixed right-6 bottom-6 group">
  <div id="speed-dial-menu-text-inside-button-square" class="flex flex-col items-center hidden mb-4 space-y-2">
    <!-- Print -->
    <button
    onclick="window.print()"
    type="button"
    class="w-[56px] h-[56px] text-gray-500 bg-white rounded-lg border border-gray-200 dark:border-gray-600 hover:text-gray-900 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
    <!-- <svg aria-hidden="true" class="w-6 h-6 mx-auto mt-px" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
    </svg> -->
    <ion-icon class="w-6 h-6 mx-auto mt-px" name="print"></ion-icon>
    <span class="block mb-px text-xs font-medium">Print</span>
  </button>
  <!-- Akhir Print -->
  <!-- Input Jadwal -->
  <button
  type="button"
  data-modal-target="defaultModal"
  data-modal-toggle="defaultModal"
  class="w-[56px] h-[56px] text-gray-500 bg-white rounded-lg border border-gray-200 dark:border-gray-600 hover:text-gray-900 shadow-sm dark:hover:text-white dark:text-gray-400 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-400">
          <!-- <ion-icon aria-hidden="true"  name="pencil"></ion-icon> -->
          <svg fill="none" class="w-6 h-6 mx-auto mt-px" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
</svg>
          <span class="block mb-px text-xs font-medium">Input Jadwal</span>
        </button>
        <!-- Akhir Input Jadwal -->
      </div>
      <button
      type="button"
      data-dial-toggle="speed-dial-menu-text-inside-button-square"
      aria-controls="speed-dial-menu-text-inside-button-square"
      aria-expanded="false"
      class="flex items-center justify-center text-white bg-blue-700 rounded-lg w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
      <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
      </svg>
      <span class="sr-only">Open actions menu</span>
    </button>
  </div>
  <!-- Akhir Speed Dial -->
  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
          <div class="flex items-center">
            <lottie-player class="w-14 h-12 mr-1" src="https://assets9.lottiefiles.com/packages/lf20_we7qtj1g.json" background="transparent" speed="1" loop autoplay></lottie-player>
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Input Jadwal Pengganti</h1>
          </div>
          <button
          type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="defaultModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
            fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-6 space-y-6">
            <form action="tambah.php" method="post">
              <div class="mb-6">
                <label for="matkul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
                <input
                type="text"
                id="matkul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="mata_kuliah"
                required />
              </div>
              <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
                <input
                type="text"
                id="hari"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="hari"
                required />
              </div>
              <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruangan</label>
                <input
                type="text"
                id="ruangan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="ruangan"
                required />
              </div>
              <div class="mb-6">
                <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>
                <input
                type="time"
                id="waktu"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="jam"
                required />
              </div>
              <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button
                  data-modal-hide="defaultModal"
                  type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  I accept
                </button>
                <button
                data-modal-hide="defaultModal"
                type="button"
                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                Decline
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Main Modal -->
  <!-- Table Pindah Jadwal -->
  <section id="tampil-jadwal" class="hidden" role="tabpanel" aria-labelledby="tampilJadwal-tab">
  <div class="flex justify-center text-center">
          <table class="border-collapse text-sm lg:w-[50vw] text-gray-500 dark:text-gray-400 max-md:!w-[65vw] mt-[1rem]">
            <thead class="sm:text-left text-white p-3 border-none uppercase bg-gray-700">
        <tr>
          <th scope="col" class="p-3 max-md:!text-[12px] text-[15px] text-center uppercase">Hari</th>
          <th scope="col" class="p-3 max-md:!text-[12px] text-[15px] text-center uppercase">Waktu</th>
          <th scope="col" class="p-3 max-md:!text-[12px] text-[15px] text-center uppercase">Mata Kuliah</th>
          <th scope="col" class="p-3 max-md:!text-[12px] text-[15px] text-center uppercase">Ruangan</th>
          <th scope="col" class="p-3 max-md:!text-[12px] text-[15px] text-center uppercase">Aksi</th>
        </tr>
      </thead>
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

      $sql = "SELECT * FROM jadwal_kuliah";
      $result = mysqli_query($koneksi, $sql);

      if (mysqli_num_rows($result) > 0) {
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr class="max-md:w-14">
        <th scope="row" class="text-center text-black p-3 max-md:!text-[12px]"><?php echo $row["hari"]; ?></th>
        <td class="text-center text-black p-3 max-md:!text-[12px]"><?php echo $row["mata_kuliah"]; ?></td>
        <td class="text-center text-black p-3 max-md:!text-[12px]"><?php echo $row["jam"]; ?></td>
        <td class="text-center text-black p-3 max-md:!text-[12px]"><?php echo $row["ruangan"]; ?></td>
        <td td class="text-center text-black p-3 max-md:!text-[12px]">
          <!--Button Aksi-->
          <!-- Button Edit -->
          <a href="form_edit.php?id=<?php echo $row[
            "id"
          ]; ?>"><button class=lass="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Edit
          </button></a> |
          <!-- Button Delete -->
          
          <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Delete
          </button>
          
          <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                  <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                  <a href="hapus.php?id=<?php echo $row[
                    "id"
                  ]; ?>"><button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                  </button></a>
                  
                  <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
              </div>
            </div>
          </div>
          
          
        </td>
      </tr>
      <?php }
      } else {
        echo " ";
      }

      mysqli_close($koneksi);
      ?>
      </table>
    </div>
    </section>
    </div>
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie.js"></script>
    <script src="https://unpkg.com/prettier/standalone.js"></script>
    <script src="https://unpkg.com/@prettier/plugin-php/standalone.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="./src/script/index.js"></script>
  </body>
  </html>
  