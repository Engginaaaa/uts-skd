<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 ">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top rounded-circle" alt="">
      Boedoet 1
    </a>
    <div id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</span></a>
        </li>
        <?php if($_SESSION['rule'] == 'admin'){?>
          <li class="nav-item">
            <a class="nav-link" href="listStudent.php">Daftar Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/logout.php">Keluar</a>
          </li>
        <?php } else if($_SESSION['rule'] == 'user'){?>
          <li class="nav-item">
            <a class="nav-link" href="php/logout.php">Keluar</a>
          </li>
        <?php } else {?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Masuk</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>