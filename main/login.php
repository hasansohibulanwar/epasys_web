<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../Img/Ic_Epasys.ico" alt="Icon-Epasys">
	<title>Epasys Login Form</title>
	<link rel="stylesheet" type="text/css" href="LoginAssets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            // echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
			// $alert ="<script>
			// 	Swal({
			// 		title: 'Error!',
			// 		text: 'Username dan password anda tidak sesuai',
			// 		type: 'warning'
			// 	  })
			//  </script>";
			$alert ="<script>alert('Username dan Password tidak sesuai') </script>";
			echo $alert;
	
        }
    }
    ?>

	<img class="wave" src="LoginAssets/img/Vector.svg">
	<div class="container">
		<div class="img">
			<img src="LoginAssets/img/bgLogin.svg">
		</div>
		<div class="login-content">
			<form action="cek_login.php" method="post">
				<img src="LoginAssets/img/Ic.png">
				<h3 class="title">Welcome to Epasys </h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<!-- <input type="submit" class="btn" value="Login"> -->
				<input type="submit" class="btn" value="Login" id="tombol">
            </form>
        </div>
    </div>


    <script type="text/javascript" src="LoginAssets/js/main.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
</body>
</html>
