<?php include('server.php');
 include('credentials.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>EHRD 477 Tailgate Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>
	</div>
	<form method="post" action="register.php">
		<center>
		<?php include('errors.php'); ?>
    <center><img src="ReedOverview.PNG" alt="Reed Overview" width="450" height="333"></center>
    <center><a href="LotA.PNG"><img src="LotA.PNG" class="img" alt="Lot A"  width="150" height="113"></a><a href="LotB.PNG"><img src="LotB.PNG" class="img" alt="Lot B"  width="150" height="113"></a><a href="LotC.PNG"><img src="LotC.PNG" class="img" alt="Lot C"  width="150" height="113"></a></center>
    <center><a href="LotD.PNG"><img src="LotD.PNG" class="img" alt="Lot D"  width="150" height="113"></a><a href="LotE.PNG"><img src="LotE.PNG" class="img" alt="Lot E"  width="150" height="113"></a><a href="LotE.PNG"><img src="LotF.PNG" class="img" alt="Lot F"  width="150" height="113"></a></center>
    <center>Please fill out the form to register for a spot </center>
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
	</center>
</body>
</html>
