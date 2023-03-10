<?php

error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

if(isset($_POST['verify'])){
  $token = $_POST['token'];
  $verifyToken = dekripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), -5);

  if($token == $verifyToken){ ?>
    <script>
    alert("Verifikasi Berhasil")
    window.location="verifySuccess.php"
    </script> <?php
  }else{
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1{
      position: absolute;
			left: 100px;
			top: 55px;
			color: #E6CBA8;
      font-size:50px;
    }
  </style>
</head>
<body">

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 mt-5 pt-5">
        
        <div class="card" >
          <img src="img/login.jpg" class="card-img-top" alt="..." style="width:100%; height:11rem; opacity:0.8;">
          <h1 style="color: white;">Verifikasi Token</h1>
          <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <button class="btn btn-danger" disabled="disabled" style="width:100%;">PERHATIAN</button>
              </div>
              <div class="mb-3">
                <span>
                Masukkan token yang telah ditampilkan pada halaman utama akun anda. Token hanya dapat digunakan sebanyak <span class="badge bg-danger">3</span> kali. Jika ujian gagal sebanyak 3 kali, maka akan langsung diarahkan ke register.
                </span>
              </div>
              <div class="mb-3">
                <label class="form-label">Token Ujian</label>
                <?php if(isset($error)){ ?>
                  <span><i style="color:red; float:right;">Token tidak valid</i></span>
                <?php } ?>
                <input type="text" class="form-control" name="token">
              </div>
              <div class="col" style="float:right;">
              
                <button name="verify" class="btn btn-primary" style="width:8rem;">Verifikasi</button>
                <a href="index.php" class="btn btn-danger" style="width:8rem;">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>