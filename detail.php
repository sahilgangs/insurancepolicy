<?php
require ('db.php');

session_start();
 
$name1 = $_SESSION['firstname'];
$eid1 = $_SESSION['eid'];
$pp2  =    $_SESSION['p_price'];
$pn2   = $_SESSION['p_name'];
?>



<html>

<center><head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<h3>Customer Details</h3>
<style>

table

{
border-collapse: collapse;
  width: 100%;
  th, td {
  text-align: left;
  padding: 8px;
}

border-style:solid;

border-width:2px;

border-color:white;
font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color:#9bc1cc;
  color:black;

}

</style>

</head>
<style>
  body{
  	
  


background-image: url('in2.jpg');

  

  /* Center and scale the image nicely */
  
  background-repeat: no-repeat;
   background-size: cover;
  
}

</style>


<body bgcolor="#EEFDEF">
<table>
<?php



$query3= "SELECT ALL * FROM request where eid=3";
	$result3=  mysqli_query($conn, $query3);
	$row3 = mysqli_fetch_row($result3);
	$sql = "SELECT * FROM request WHERE eid=$eid1";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql);
$row3 = mysqli_fetch_array($result, MYSQLI_ASSOC) ;
if(!$row3){
echo "<p>'NO POLICY PURCHASED YET'</p>";
}

else{



while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC))
{

	
	echo "<table border='40'>

<tr>

<th>POLICY ID</th>

<th>POLICY TYPE</th>

<th>AMOUNT</th>

</tr>";
	

  echo "<td>" . $row['p_id'] . "</td>";

  echo "<td>" . $row['p_name']. "</td>";

  echo "<td>" . $row['p_price']. "</td>";

  

 echo "</table>";


 

}}
?>
</table>
<h4><a  href="policy.php">BUY POLICY</a></h4>
<a  href="index.php">Logout</a></h5>

</body>

</html></center>