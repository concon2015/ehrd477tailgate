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
		<h2>Register</h2>
	</div>
	<center><img src="ReedOverview.PNG" alt="Reed Overview" width="500" height="333"></center>
	<!-- Trigger the Modal -->
		<img id="lotA" src="LotA.PNG" alt="Lot A" style="width:100%;max-width:300px">

	<!-- The Modal -->
		<div id="lotA_Modal" class="modal">

 	 <!-- The Close Button -->
 		 <span class="close">&times;</span>

 	 <!-- Modal Content (The Image) -->
 		 <img class="modal-content" id="img01">

	  <!-- Modal Caption (Image Text) -->
		  <div id="caption"> Lot A</div>
	</div>
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
<script>
// Get the modal
var modal = document.getElementById('lotA_Modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('lotA');
var modalImg = document.getElementById("lotA_Modal");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>
