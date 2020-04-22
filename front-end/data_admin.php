<?php 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Tabel Data Admin</title>
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
    <li><a href="#"><i class="fas fa-folder-open"></i>Daftar Karyawan</a></li>

     <button><a href=#>LOGOUT</a></button>
  </ul>
</div>
  <div class="nav">
   <label style="margin-bottom:5px;"><img src="<?php echo BASE_URL?>asset/logo_skensa.png"> S K E N M A I L </label>
  </div>
</div>

 <table class="content-table">
  	<thead>
    	<tr>
	      <th style="width: 70px">NIP</th>
	      <th style="width: 150px">Username</th>
	      <th style="width: 150px">Password</th>
	      <th style="width: 50px">OPSI</th>
   		 </tr>
  	</thead>
  	<tbody>
   		 <tr>
        <td>001</td>
        <td>Ayu Dewi</td>
        <td>Ayude33</td>
        <td><button><a href="form_edit_admin.php">Edit</a></button>|<button onclick="konfirmasi()"><a href="#">Delete</a></button></td>
        <p id="pesan"></p>
       </tr>
	    <tr>
        <td>002</td>
        <td>Ayu Dewi</td>
        <td>Ayude33</td>
        <td><button><a href="form_edit_admin.php">Edit</a></button>|<button onclick="konfirmasi()"><a href="#">Delete</a></button></td>
        <p id="pesan"></p>
       </tr>
	    <tr>
        <td>003</td>
        <td>Ayu Dewi</td>
        <td>Ayude33</td>
        <td><button><a href="form_edit_admin.php">Edit</a></button>|<button onclick="konfirmasi()"><a href="#">Delete</a></button></td>
        <p id="pesan"></p>
       </tr>
	    <tr>
        <td>004</td>
        <td>Ayu Dewi</td>
        <td>Ayude33</td>
        <td><button><a href="form_edit_admin.php">Edit</a></button>|<button onclick="konfirmasi()"><a href="#">Delete</a></button></td>
        <p id="pesan"></p>
       </tr>
     <script>
      function konfirmasi(){
         var tanya = confirm("Apakah Anda Akan Menghapus Data Ini ?");
 
         if(tanya === true) {
            pesan = "";
         }else{
            pesan = "";
         }
 
         document.getElementById("pesan").innerHTML = pesan;
      }
    </script>
  </tbody>
</table>
 </body>
 </html>