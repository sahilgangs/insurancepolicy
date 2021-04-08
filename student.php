

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/slate/bootstrap.min.css">

 <h5> <a  href="signup.php">Sign Up</a><br>
  <a  href="index.php">Home</a></h5>
</div>
</head>
<body>

<style>
  body{

  background-image: url("in1.jpg");

  height: 100%;

  /* Center and scale the image nicely */
  
  background-repeat: no-repeat;
  background-size: 2100px;
  
}

</style>
	
	<center>
	<div class="loginbox">
		<h1>User</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
		<label> Username: </label>
		 <input type="email" name="user" required><br><br>
		 <label> Password: </label>
		 <input type="password" name="pass" required><br><br>
		 <button type= "submit" name="login">Login</button>
		</form>
	</div></center>

</body>

</html>


<?php
require ('db.php');
require ('process.php');
if(isset($_POST['login'])){
	$user= mysqli_real_escape_string($conn,$_POST['user']);
	$pass= mysqli_real_escape_string($conn,$_POST['pass']);

	$q="SELECT eid FROM register WHERE email='$user' AND password='$pass'";

$query="SELECT * FROM register WHERE email='$user' AND password='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
if($row['email']==$user && $row['password']==$pass)
{
	//echo 'successful';
 $query0="SELECT eid from register where email='$user'";
  $result0=mysqli_query($conn,$query0);
$row0 = mysqli_fetch_row($result0);
$id1=$row0[0];

  $query1="SELECT firstname from register where email='$user'";
  $result1=mysqli_query($conn,$query1);
$row1 = mysqli_fetch_row($result1);
$name1=$row1[0];
 session_start();
$_SESSION['firstname']=$name1;
$_SESSION['eid']=$id1;
header ('Location: policy.php');
}
else{


	require('fail.html');
}
}
?>


