


<html lang="en">
<head>
	<title>Halaman Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
					<span class="login100-form-title p-b-26">
						Register Pelanggan
					</span>
					<span class="login100-form-title p-b-48">
						<img src="../dashboard/assets/image/logo.png" style="width: 100px;">
					</span>
					
				
	<?php if (isset($_SESSION['pesan'])) : ?>
        <?= $_SESSION['pesan'] ?>
    <?php unset($_SESSION['pesan']); endif; ?>

			<div class="card">
			  	<div class="card-body">
			  		<form action="./registrasi_user.php" method="post">
				  		<div class="form-group">
				  			<label class="form-label" for="nama_user">Nama Lengkap</label>
				  			<input type="text" class="form-control" id="nama_user" name="nama_user" required>
				  		</div>
				  		<div class="form-group">
				  			<label class="form-label" for="username">Username</label>
				  			<input type="text" class="form-control" id="username" name="username" required>
				  		</div>
				  		<div class="form-group">
				  			<label class="form-label" for="password">Password</label>
				  			<input type="password" class="form-control" id="password" name="password" required>
				  		</div>
				  		<div class="form-group">
				  			<label class="form-label" for="id_level">id_level</label>
				  			<select name="id_level" id="id_level" class="form-control">
				  				<option value="5">Pelanggan</option>
				  			</select>
				  		</div>
				  		<button type="submit" class="btn btn-primary">Submit</button>
				  		<button type="button" class="btn btn-danger" onclick="history.back()">Kembali</button>
			  		</form>
			  	</div>
			</div>
			
		</div>
	</div>
</div>


			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>