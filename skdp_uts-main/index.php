<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

$token = enkripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body">
  <!-- navbar -->
  <?php require "components/navbar.php"?>
  <!-- /navbar -->

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card text-center">
          <?php if($_SESSION['rule'] == 'user'){ ?>
            <h5 class="card-header bg-primary" style="color:white;">Selamat Datang, <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/sma.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 1 JAKARTA</h5>
              <p class="card-text">Token Anda : <b disabled="disabled" class="badge bg-success p-3"><?= $token ?></b></p>
              <p class="card-text">Gunakan token untuk memulai ujian</p>
              <a href="verify.php" class="btn btn-primary">Mulai Ujian</a>
            </div>
          <?php } else if ($_SESSION['rule'] == 'admin') {?>
            <h5 class="card-header bg-primary" style="color:white;">Selamat Datang, <?= $_SESSION['username'] ?></h5>
            <div class="card-body">
              <img src="img/sma.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 1 JAKARTA</h5>
              <button class="btn btn-primary" style="width:100%;">ADMIN DASHBOARD</button>
            </div>
          <?php } else {?>
            <h5 class="card-header bg-primary" style="color:white;">Selamat Datang</h5>
            <div class="card-body">
              <img src="img/sma.jpg" class="rounded" alt="..." style="width:100%;">
              <div class="border-top mt-3 mb-3"></div>
              <h5 class="card-title">SMA NEGERI 1 JAKARTA</h5>
              <p class="card-text">
                  Sekolah Menengah Atas Negeri 1 Jakarta atau dikenal juga dengan nama Boedoet 1 yang berada di bilangan Sawah Besar, Jakarta Pusat.
                  Semenjak resmi berdiri sekitar tahun 1950an, SMAN 1 Jakarta sudah melahirkan ratusan ribu alumni yang tersebar diberbagai penjuru lingkungan kehidupan. Komunitas SMA Negeri 1 Jakarta adalah suatu bangun-bangun ikatan bernama IKABOEDOET yang secara informal menyatukan keluarga agung SMAN 1 Jakarta.
              </p>
              <p class="card-text">
                Website ini digunakan untuk melakukan ujian untuk mendapatkan sertifikat untuk siswa yang tidak melanjutkan studi ke jenjang yang lebih tinggi. 
                Sertifikat dapat digunakan sebagai bukti keahlian yang dimiliki oleh siswa
              </p>
              <p class="card-text">Untuk melakukan ujian ini, masukkan token yang telah ditampilkan pada akun masing-masing siswa</p>
              <a href="register.php" class="btn btn-primary">Daftar Sekarang</a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>