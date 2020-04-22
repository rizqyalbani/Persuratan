<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?= $data['judul']?></title>
    <style>
	img{
		position: absolute;
		width: 350px;
		height: 410px;
		left: 300px;
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
        left: 651px;
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
	      padding-bottom: 10px;
	      padding-top: 10px;
	      text-align: center;
	      color:  #4682B4;
	}
	label {
	    font-family: "Raleway", sans-serif;
	    font-size: 11pt;
	}
	#forgot-pass {
	    font-family: "Raleway", sans-serif;
	    font-size: 10pt;
	    margin-top: 3px;
	    text-align: right;
	}
	.form {
	    align-items: left;
	    display: flex;
	    flex-direction: column;
	}
	.form-border {
	    background:  #4682B4;
	    height: 1px;
	    width: 100%;
	}
	.form-content {
	    background: #ffffff;
	    border: none;
	    outline: none;
	    padding-top: 14px;
	}
	#signup {
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 20px;
    text-align: center;
	}
	#submit-btn {
	    background: #4682B4;
	    border: none;
	    border-radius: 21px;
	    box-shadow: 0px 1px 8px #000000;
	    cursor: pointer;
	    color: white;
	    font-family: "Raleway SemiBold", sans-serif;
	    height: 42px;
	    margin: 0 auto;
	    margin-top: 80px;
	    transition: 0.25s;
	    width: 200px;
	}
  </style>
  </head>
  <body>
  <img src="<?php echo BASE_URL?>asset/login.png">
  <div id="card">
 		<div id="card-content">
	  		<div id="card-title">
		    	<h2>LOGIN</h2>
	  		</div>
	  		<form method="post" class="form">
	  			<label for="user-email" style="padding-top:8px">&nbsp;Username</label>
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

				<?php
					// print_R($data);
					if (!empty($data['valid'])) {
						echo $data['valid'];
					}
				?>
				<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
				<button id="submit-btn" type="submit" name="submit" value="LOGIN">LOGIN</button>
				<a href="<?php echo BASE_URL ?>Register/register.php" id="signup">Don't have account yet?</a>
	  		</form>
		</div>
 	</div>
  </body>
</html>



   <!-- <form action="" method="POST">
    <label for=""> Username</label>
    <input type="text" name="username">
    
    <label for=""> Password</label>
    <input type="password" name="password">

    <button type="submit" name="submit">Masuk</button>
  </form> -->