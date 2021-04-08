<?php
require ('db.php');

session_start();
 
$name1 = $_SESSION['firstname'];
$eid1 = $_SESSION['eid'];
$pp2=$_SESSION['p_price'];
$pn2=$_SESSION['p_name'];?>

<html>

<center><head>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script >

     
swal ( "Transaction Complete" ,  "Thank you for buying our product" ,  "success" )




</script>

<h2>Thank you for buying our policy</h2>
<h3>Customer Details</h3>
<style>

table

{

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

tr:nth-child(even) {
  background-color:#9bc1cc;
  color:black;

}

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

<?php

 

echo "<table border='1'>

<tr>

<th> EID </th>


<th> CUSTOMER NAME </th>

<th> POLICY TYPE </th>

<th> AMOUNT </th>

</tr>";

 



  echo "<tr>";

  echo "<td>" . $eid1 . "</td>";

  echo "<td>" . $name1 . "</td>";

  echo "<td>" . $pn2 . "</td>";

  echo "<td>" . $pp2 . "</td>";

  echo "</tr>";

  

echo "</table>";

 


?>
<h4><a  href="index.php">Logout</a></h4>
</body>

</html></center>