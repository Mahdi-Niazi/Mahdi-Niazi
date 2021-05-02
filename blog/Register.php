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
		<title>Register</title>
	</head>

	<body>
		<!--Header-->
			<?php include(ROOT_PATH . '/app/includes/header.php'); ?>
		<!--//Header-->
		
		<!--Register Section -->
		
		<div class="auth-content">
			<form action="register.html"  method="post">
				<h2 class="form-title">Join with us</h2>
				<!--
				<div class="msg error">
					<li>Username is required</li>
					
				</div>
				
				-->
				
				
				<div>
					<label>Username</label>
					<input type="text" name="username" class="text-input">
				</div>
				<div>
					<label>Email</label>
					<input type="email" name="email" class="text-input">
				</div>
				<div>
					<label>Password</label>
					<input type="passoword" name="password" class="text-input">
				</div>
				<div>
					<label>Password Confirmation</label>
					<input type="password" name="password-confirm" class="text-input">
				</div>
				<div>
					<button type="submit" name="register-btn" class="btn btn-big">
						Register
					</button>
					<p class>Or <a href="<?php echo BASE_URL . "/login.php" ?>">Sign in</a></p>
				</div>
			</form>
		</div>
		<!--JQuery -->	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

		<script src="assets/js/scripts.js"></script>
		
	</body>
</html>