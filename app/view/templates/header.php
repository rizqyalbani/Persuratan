<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= BASE_URL?>asset/css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check"> 
      <i class="fas fa-bars" id="btn" style="margin:-15px"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Menu</header>
  <ul>
    <li><a href="<?= BASE_URL?>admin/addDataSuratMasuk"><i class="fas fa-arrow-circle-right"></i>Surat Masuk</a></li>
    <li><a href="<?= BASE_URL?>adminDisposisiKeluar/addDataSuratKeluar"><i class="fas fa-arrow-circle-left"></i>Surat Keluar</a></li>
    <li><a href="#"><i class="fas fa-stream"></i>Serah Terima Documen</a></li>
    <li><a href="#"><i class="fas fa-folder-open"></i>Daftar Karyawan</a></li>
    <li><a href="<?= BASE_URL?>admin/showRegister">Admin</a></li>
    <li><a href="<?= BASE_URL?>admin/showUser">User</a></li>
   <button><a href="<?= BASE_URL?>admin/logOut">LOGOUT</a></button>
  </ul>
  </div> 
  <div class="nav">
   <label style="margin-bottom:5px;"><img src="<?php echo BASE_URL?>asset/logo_skensa.png"> S K E N M A I L </label>
  </div>

