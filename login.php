<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	<center>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
		<center><img src="Tailgate.jpeg" alt="Aggie Tailgate" width="400" height="270"></center>
		<center>Howdy! This is the web registration portal for Texas A&M Tailgating. Please login below.</center>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet registered? <a href="register.php">Sign up</a>
		</p>
	</form>
		</center>

</body>
</html>
