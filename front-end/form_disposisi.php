<!DOCTYPE html>
<html>
<head>
	<title>Form Disposisi</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet')
	*{
		margin: 0;
		padding: 0;
		outline: none;
		box-sizing: border-box;
	}	
	body{
		background:linear-gradient(#E0EAFC,#CFDEF3);
		background-size: cover;
		background-repeat: no-repeat; 
		width: 100%;
		height: 192vh;
		font-size:16px;
		font-family: 'Bebas Neue', cursive; 
		overflow-x: hidden;}
	.wrap {
		position: absolute;
		top: 20%;
		left: 30%;
		transform:translate(-50% -50%);
		width: 500px;
	}
		
	.contact-us {
		width: 100%;
		max-width: 500px;
		height: auto;
		background-color: rgba(0,0,0,0.7);
		padding: 40px 50px;
		border-radius: 10px;
	}
	.title{
		font-size: 2em;
		line-height: 1.25em;
		text-align: center;
		text-transform: uppercase;
		font-weight: 900;
		letter-spacing: 2px;
		color: #3385ff;
		padding-bottom: 15px;
	}
	.input-fields{
		padding: 0 30px;
	}
	.input-fields .items{
		width: 100%;
		padding-bottom: 15px;
	}
	.input-fields .items .label{
		display: block;
		font-size: 1em;
		color: #ffecb3;
		text-transform: capitalize;
		padding-bottom: 5px;
	}
	.input-fields .items .input,
	.input-fields .items .text-area {
		background: transparent;
		border:0;
		border: 1px solid blue;
		width: 100%;
		padding: 8px 10px;
		font-size: 1em;
		color: black;
		border-radius: 4px;
	}
	
	.btn{
		margin-left: 7em;
		background: #2193b0;
	    background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
	    background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;
	    border-color: #1cc88a;
		color: #ffecb3;
		font-size: 1.2em;
		padding: 10px 0;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		border-radius: 5px;
		cursor: pointer;
		letter-spacing: 2px;
		width: 200px;
	}
	.items #message{
		height: 100px;
	}
	input .btn {
		width: 30px;
	} 
	</style>
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

<form method="post">
    <div class="wrap">
		<div class="contact-us">
			<div class="title">Form Disposisi</div>
			<div class="input-fields">
				<div class="items">
					<label class="label">No Agenda :</label>
					<input type="number" class="input">
				</div>
				<div class="items">
					<label class="label">Tanggal :</label>
					<input type="date" class="input">
				</div>
				<div class="items">
					<label class="label">Tanggal penyelesaian :</label>
					<input id="nationality" type="date" class="input">
				</div>
				<div class="items">
					<label class="label">Instruksi :</label>
					<input type="text" class="input">
				</div>
				<div class="items">
					<label class="label">Jenis Disposisi :</label>
					<select class="input" type="text">
						<option value="-">-</option>
      					<option value="User">-</option>
		      			<option value="Admin">-</option>
					</select>
				</div>
				<div class="items">
					<label for="number_of_people" class="label">User :</label>
					<select class="input" type="text">
						<option value="-">-</option>
						<option value="User">User</option>
						<option value="Admin">Admin</option>
						
					</select>
				</div>
			</div>
		<input class="btn" type="submit" name="submit" value="SEND">
		</div>
	</div>
</form>
</body>
</html>