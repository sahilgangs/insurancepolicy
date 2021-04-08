<?php
require ('db.php');

session_start();
 
$name1 = $_SESSION['firstname'];
$eid1 = $_SESSION['eid'];



	
?>

<!DOCTYPE html>
<html>
<head>


	<title></title>
<center><h4>Dear <?php echo strtoupper ( $name1 ); ?>, Please select the policy you want to buy :</h4>
<h5>Customer id :- <?php echo strtoupper ( $eid1 ); ?></h5></center>

	

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
</style>



<body>
	
	<style>
  body{

  background-image: url("in2.jpg");

  

  /* Center and scale the image nicely */
  
  background-repeat: no-repeat;
   background-size: cover;
  
}

</style>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
	<h4><a  href="detail.php">View Purchased Policy</a></h4>
	<h4><a  href="index.php">Logout</a></h4>
		<div class="row">
  	<div class="column">
     <p id="search_para">
     	</head9>

	        		
  		      	
     		<form action="policy.php" method="post">
			<img src="./images/property (3).png" style="width:45%">
			<h4 id="search_para">Property</h4>
			<p id="search_para">Property insurance provides protection against most risks to property, such as fire, theft and some weather damage. This includes specialized forms of insurance such as fire,flood, earthquake, home or boiler.</p>
			<h5>PRICE : RS. 20000  <input class="btn btn-primary" type="submit" id="p1" name="p1" value="Buy Now">
				

<?php
 if(isset($_POST['p1'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=1";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);


$pd1=$row3[0];
	$pn1=$row3[1];
	$pp1=$row3[2];

	
$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
 }?>
			
				

			</div>
		
		<div class="column">
	
			<img src="./images/transit.png"style="width:45%">
			<h4 id="search_para">Transit</h4>
			<p id="search_para">Transit insurance or transport insurance policy for cargo covers a number of risks like damage to goods due to untoward perils such as earthquakes, fires, explosion and lightning.</p>
			<h5>PRICE : RS. 25000 <input class="btn btn-primary" type="submit" id="p1" name="p2" value="Buy Now">
				<?php
 if(isset($_POST['p2'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=2";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);
	
	$pd1=$row3[0];
	$pn1=$row3[1];
	$pp1=$row3[2];

	$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
	


 }?>
			
	</div>
	<div class="column">
	
			<img src="./images/cyber (3).png"style="width:45%">
			<h4 id="search_para">Liability</h4>
			<p id="search_para">Liability insurance provides the insured party with protection against claims resulting from injuries and damage to people and/or property. Liability insurance policies cover both legal costs and any payouts.</p>
			<h5>PRICE : RS. 10000 <input class="btn btn-primary" type="submit" id="p1" name="p3" value="Buy Now">
				<?php
 if(isset($_POST['p3'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=3";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);
	
	$pd1=$row3[0];
	$pn1=$row3[1];
	$pp1=$row3[2];

	$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
	


 
}?>
			
		</div>
		<div class="column">
	
			<img src="./images/health.png"style="width:45%">
			<h4 id="search_para">Life</h4>
			<p id="search_para">Life insurance is a contract between an insurance policy holder and an insurer or assurer, where the insurer promises to pay a sum of money upon the death of an insured person. </p>
			<h5>PRICE : RS. 30000 <input class="btn btn-primary" type="submit" id="p1" name="p4" value="Buy Now">
				<?php
 if(isset($_POST['p4'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=4";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);
$pn1=$row3[1];
	$pp1=$row3[2];
	$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
	
	 }?>
			
		</div>
		<div class="column">
	
			<img src="./images/CRASH.png"style="width:45%">
			<h4 id="search_para">Vehicle</h4>
			<p id="search_para">Its primary use is to provide financial protection against physical damage or bodily injury resulting from traffic collisions and against liability.</p>
			<h5>PRICE : RS. 40000<input class="btn btn-primary" type="submit" id="p1" name="p5" value="Buy Now">
				<<?php
 if(isset($_POST['p5'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=5";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);

	$pn1=$row3[1];
	$pp1=$row3[2];
	$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
	
 }?>
			
		</div>
		<div class="column">
		
			<img src="./images/lifw.png"style="width:45%">
			<h4 id="search_para">Health</h4>
			<p id="search_para">Health insurance is an insurance that covers the whole or a part of the risk of a person incurring medical expenses, spreading the risk over a large number of persons.</p>
			<h5>PRICE : RS. 15000 <input class="btn btn-primary" type="submit" id="p1" name="p6" value="Buy Now">
				<?php
 if(isset($_POST['p6'])){
 require ('db.php');
$query3= "SELECT * FROM policy where p_id=6";
	$result3=  mysqli_query($conn, $query3);

	$row3 = mysqli_fetch_row($result3);
	$query4="INSERT INTO request(eid,p_id,p_name,p_price) VALUES ('".$eid1."','".$row3[0]."','".$row3[1]."','".$row3[2]."')";
	mysqli_query($conn, $query4);
	$pn1=$row3[1];
	$pp1=$row3[2];
	$_SESSION['p_name']=$pn1;
$_SESSION['p_price']=$pp1;
	header ('Location: upload.php');
		
 }?>
			
		</div>
	</p>
</div>
</div>
</body>
</html>

