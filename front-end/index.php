<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
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
    <li><a href="surat_masuk.php"><i class="fas fa-arrow-circle-right"></i>Surat Masuk</a></li>
    <li><a href=""><i class="fas fa-arrow-circle-left"></i>Surat Keluar</a></li>
    <li><a href="#"><i class="fas fa-stream"></i>Serah Terima Documen</a></li>
   <li><a href="#"><i class="fas fa-folder-open"></i>>Daftar Karyawan</a></li>
   <button><a href=#>LOGOUT</a></button>
  </ul>
</div> 
  <div class="nav">
   <label style="margin-bottom:5px;"><img src="<?php echo BASE_URL?>asset/logo_skensa.png"> S K E N M A I L </label>
  </div>
 <section>
    <div class="tulisan">
      <h1>SELAMAT DATANG DI WEBSITE PERSURATAN</h1><br>
      <img src="<?php echo BASE_URL ?>asset/logo_skensa.png"><br><br>
      <h3>SMK NEGERI 1 DENPASAR.</h3>
    </div>
 </section>

  </body>
</html>
