
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
</body>
</html>

<?php

require ('db.php');


if(isset($_POST['signup'])){


	$eid=mysqli_real_escape_string($conn,$_POST['eid']);
	$firstname =mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$query= "INSERT INTO register VALUES ('$eid','$firstname','$lastname','$email','$password')";

	if(!mysqli_query($conn,$query)){
		echo'Email / EID already in use';
	}
	else{
			require('index.html');
	

		
	}
	

}

