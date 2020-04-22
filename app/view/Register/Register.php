
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$data['title']?> </title>
      <style>
        img{
          position: absolute;
          width: 350px;
          height: 410px;
          left: 651px;
          top: 105px;
        }
          #card {
              position: absolute;
              background: white;
              border-radius: 1px;
              box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
              height: 410px;
              margin: 6rem auto 8.1rem auto;
              width: 350px;
              left: 300px;
        }
        body{
          background-color: #4682B4;
        }
        #card-content {
            padding: 12px 44px;
        }
        #card-title {
              font-family: "Raleway Thin", sans-serif;
              letter-spacing: 4px;
              padding-bottom: 23px;
              padding-top: 13px;
              text-align: center;
              color: #4682B4;
        }
        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }
        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }
        .form-border {
            background: #4682B4;
            height: 1px;
            width: 100%;
        }
        .form-content {
            background: white;
            border: none;
            outline: none;
            padding-top: 14px;
        }
        #submit-btn {
            background:#4682B4;
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #000000;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 40px;
            margin: 0 auto;
            margin-top: 20px;
            transition: 0.25s;
            width: 200px;
        }
        #submit-btn1 {
            background:#4682B4;
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #000000;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            /* height: 20px; */
            margin: 0 auto;
            margin-top: 10px;
            transition: 0.25s;
            width: 200px;
            text-align: center;
            padding: .7rem 0;
            font-size: .9em;
            text-decoration: none;
            display: inline-block;
        }
    </style>
  </head>
  <body>
    <img src="<?php echo BASE_URL?>asset/register.png">

    <div id="card">
 		<div id="card-content">
	  		<div id="card-title">
		    	<h2>Register</h2>
        </div>
         <!-- <p>ksl;fkasjlf</p> -->
	  		<form method="post" class="form" action="<?= BASE_URL; ?>proses/register">
	  			<label for="user-email" style="padding-top:0px">&nbsp;Username</label>
				<input
				   id="user-email"
				   class="form-content"
				   type="text"
				   name="username"
				   autocomplete="on"
           required />
           
				<div class="form-border"></div>
				<label for="user-password" style="padding-top:15px">&nbsp;Password</label>
				<input
				   id="user-password"
				   class="form-content"
				   type="password"
				   name="password"
           required />
          
        <div class="form-border"></div>
        <label for="nip" style="padding-top:15px"> nip</label>
        <input type="number" name="nip" class="form-content">
				<!-- <label for="nip" style="padding-top:22px">nip</label>
				<input
				   id="user-password"
				   class="form-content"
				   type="password"
				   name="password"
				   required /> -->
        <div class="form-border"></div>
        <!-- <p>Username Already exist</p> -->
        <?php
          if ( !empty($data['notif']) ) {
            echo $data['notif'];
          }
        ?>

        <input type="hidden" value ="2" name="id_role">
				<button id="submit-btn" type="submit" name="submit" value="LOGIN">SUBMIT</button>
        <a href="<?=BASE_URL?>" id="submit-btn1" type="submit" name="submit" value="LOGIN">BACK</a>
	  		</form>
		</div>
 	</div>

  
</body>

<!-- <form action="<?= BASE_URL; ?>proses/register" method="POST">
    <label for=""> Username</label>
    <input type="text" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <label for=""> nip</label>
    <input type="number" name="nip">

    <input type="hidden" value ="2" name="id_role">

    <button type="submit" name="submit">Daftar </button>
  </form> -->
