<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Custom Styling -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script src="https://kit.fontawesome.com/936703f17d.js" crossorigin="anonymous"></script>
		<title>Login</title>
	</head>

	<body>
		<!--Header-->
			<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
		<!--//Header-->
		
		<div class="auth-content">
			<form action="login.html"  method="post">
				<h2 class="form-title">We missed you please login</h2>
				<div>
					<label>Username</label>
					<input type="text" name="username" class="text-input">
				</div>
				<div>
					<label>Password</label>
					<input type="passoword" name="password" class="text-input">
				</div>
				<div>
					<button type="submit" name="register-btn" class="btn btn-big">
						Login
					</button>
					<p class><a href="<?php echo BASE_URL . "Register.php" ?>">Or Sign up</a></p>
				</div>
			</form>
		</div>
		<!--JQuery -->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

		<script src="assets/js/scripts.js"></script>
		
	</body>
</html>