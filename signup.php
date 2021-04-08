 <?php
     session_start();
     
     //we need session for the log in thingy XD 
    include("db.php");?>



<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 <h5> <a  href="student.php">Login</a><br>
  <a  href="index.php">Home</a></h5>
</head>
<body>

<div>
	<?php
	
	
	?>	
</div>
<style>
  body{

  background-image: url("in.jpg");

  

  /* Center and scale the image nicely */
  
  background-repeat: no-repeat;
   background-size: 1700px;
  
}

</style>

<div>
<form action="signup.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Sign Up</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">

					<label for="eid"><b>EID</b></label>
					<input class="form-control" id="eid"  type="int" name="eid" required>

					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
		 <input class="btn btn-primary" type="submit" id="resgiter1" name="signup" value="Sign Up">
		</div>
	</div>

	</form>

</div>



</body>
</html>
<?php

require ('process.php');

?>