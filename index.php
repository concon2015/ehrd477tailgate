<?php 
	include('credentials.php')
	session_start();
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	$db1 = mysqli_connect('localhost', 'connor', 'tailgate', 'registration');
	$sql1 = "SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'";
	$spot1 = mysqli_query($db1, $sql1);
	$row1 = mysqli_fetch_array($spot1,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>Your Spot is <strong><?php echo $row1['spot']; ?></strong><p>
			<p>Your email is <strong><?php echo $row1['email']; ?></strong><p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>
