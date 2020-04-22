<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Form Edit Operator</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
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

<div class="form-style-6" style="margin-top: 50px;">
<h1>EDIT OPERATOR</h1>
<form>
<input type="text" name="field1" placeholder="NIP"/>
<input type="text" name="field2" placeholder="Username"/>
<input type="TEXT" name="field2" placeholder="Password"/>
<input type="submit" value="SAVE"/>
</form>
</div>
</body>
</html>
