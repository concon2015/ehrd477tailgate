<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>EHRD 477 Tailgate Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<center><img src="ReedOverview.PNG" alt="Reed Overview" width="500" height="333"></center>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="form-group">
                        <label>Spot</label>
                        <select name="spot">
                        <?php
                        $sql2 = mysqli_query($db, "SELECT * FROM availablespots WHERE aspots NOT IN (SELECT spot FROM users)");
                        while ($row = $sql2->fetch_assoc()){
                        echo "<option>" . $row['aspots'] . "</option>";
                        }
                        ?>
                        </select>
                </div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
