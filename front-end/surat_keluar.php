<?php
?>
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
    <li><a href="surat_masuk.php"><i class="fas fa-arrow-circle-left"></i>Surat Masuk</a></li>
    <li><a href="#"><i class="fas fa-arrow-circle-left"></i>Surat Keluar</a></li>
    <li><a href="#"><i class="fas fa-stream"></i>Serah Terima Documen</a></li>
     <button><a href=#>LOGOUT</a></button>
  </ul>
</div>
  <div class="nav">
   <label style="margin-bottom:5px;"><img src="logo_skensa.png"> S K E N M A I L </label>
  </div>
  <button class="btn" style="margin-top:15px; margin-left:1100px;"><a href="javascript:void(0);" id="jwpopupLink" style="text-decoration: none;">Tambah Data Surat</a></button>
  
  <table class="content-table">
  <thead>
    <tr>
      <th style="width: 70px">No. Surat Keluar</th>
      <th style="width: 150px">Perihal Surat Keluar</th>
      <th style="width: 150px">Lampiran Surat Keluar</th>
      <th style="width: 200px">Alamat Tujuan Surat Keluar</th>
      <th style="width: 105px">Tgl Surat keluar</th>
      <th style="width: 100px">Nama Instansi</th>
      <th style="width: 100px">Disposisi</th>
      <th style="width: 50px">OPSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>001</td>
      <td>Rapat Komite</td>
      <td>pembayaran</td>
      <td>Jln Cokroaminoto</td>
      <td>2020-03-02</td>
      <td>SMKN 1 DENPASAR</td>
      <td><a href="#">Kirim</a>|<a href="#">Lihat</a></td>
      <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
    </tr>
    <tr>
     <td>001</td>
      <td>Rapat Komite</td>
      <td>pembayaran</td>
      <td>Jln Cokroaminoto</td>
      <td>2020-03-02</td>
      <td>SMKN 1 DENPASAR</td>
      <td><a href="#">Kirim</a>|<a href="#">Lihat</a></td>
      <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
    </tr>
    <tr>
     <td>001</td>
      <td>Rapat Komite</td>
      <td>pembayaran</td>
      <td>Jln Cokroaminoto</td>
      <td>2020-03-02</td>
      <td>SMKN 1 DENPASAR</td>
      <td><a href="#">Kirim</a>|<a href="#">Lihat</a></td>
      <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
    </tr>
    <tr>
      <td>001</td>
      <td>Rapat Komite</td>
      <td>pembayaran</td>
      <td>Jln Cokroaminoto</td>
      <td>2020-03-02</td>
      <td>SMKN 1 DENPASAR</td>
      <td><a href="#">Kirim</a>|<a href="#">Lihat</a></td>
      <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
    </tr>
  </tbody>
</table>

<div id="jwpopupBox" class="jwpopup">
  <!-- jwpopup content -->
  <div class="jwpopup-content">
    <div class="jwpopup-head">
      <span class="close">×</span>
      <h2>Isi Form berikut untuk menambahkan Data Surat</h2>
    </div>

    <div class="jwpopup-main">
      <form>
      <label>No.Surat Keluar :</label>
      <input style="margin-left: 82.5px" type="number"><br>
 
      <label>Perihal Surat Keluar :</label>
      <input style="margin-left: 54px" type="text"><br>

      <label>Lampiran Surat Keluar :</label>
      <input style="margin-left: 3em" type="text"><br>

      <label>Alamat Tujuan Surat Keluar :</label>
      <input type="text"><br>

      <label>Tgl Surat Keluar :</label>
      <input style="margin-left: 6.4em" type="date"><br>

      <label>Nama Instansi :</label>
      <input style="margin-left: 7.21em" type="text"><br>

      <label>Disposisi :</label>
      <input style="margin-left: 10.2em" type="text"><br>
 
      <input style="margin-left: 32em; width: 50px;" type="submit" name="Submit" class="tombol_login" value="SAVE">
 
      <br/>
      <br/>
    </form>
  </div>
</div>
<script type="text/javascript">
  // untuk mendapatkan jwpopup
var jwpopup = document.getElementById('jwpopupBox');

// untuk mendapatkan link untuk membuka jwpopup
var mpLink = document.getElementById("jwpopupLink");

// untuk mendapatkan aksi elemen close
var close = document.getElementsByClassName("close")[0];

// membuka jwpopup ketika link di klik
mpLink.onclick = function() {
    jwpopup.style.display = "block";
}

// membuka jwpopup ketika elemen di klik
close.onclick = function() {
    jwpopup.style.display = "none";
}

// membuka jwpopup ketika user melakukan klik diluar area popup
window.onclick = function(event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}
</script>
</body>
</html>
