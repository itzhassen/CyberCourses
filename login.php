<!DOCTYPE html>
<html lang="en">
<head>
	<?php $user = $_GET["user"];
	if ($user =="formateur"){?>
	<title>Instructor</title>
	<?php } else { ?>
	<title>Admin</title>
<?php } ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	session_start();
	$_SESSION["profil"] = $_GET["user"];
	?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="redirect.php">
			<?php 	if ($user =="formateur"){ ?>
	<span class="login100-form-title">Instructor Login</span>
                    <?php } else { ?>
	<span class="login100-form-title">Admin Login</span>
					<?php } ?>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
<?php if ($_GET["user"] == "admin") { ?><input class="input100" type="text" name="user" placeholder="User"><?php } else { ?><input class="input100" type="text" name="email" placeholder="Email"> <?php } ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<?php if ($_GET["user"] == "admin") { ?><input class="input100" type="password" name="pass" placeholder="Password"><?php } else { ?><input class="input100" type="text" name="tel" placeholder="Phone Number"> <?php } ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<?php if ($_GET["user"] == "admin") { ?>
							<i class="fa fa-lock" aria-hidden="true"></i> <?php } ?>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>