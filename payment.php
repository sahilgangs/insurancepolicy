<?php
require ('db.php');

session_start();
 
$name1 = $_SESSION['firstname'];
$eid1 = $_SESSION['eid'];
$pp2=$_SESSION['p_price'];
$pn2=$_SESSION['p_name'];
  
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Style.css">
<h5> <a  href="student.php">Logout</a><br>
</head>
<h5>Dear <?php echo strtoupper ( $name1 ); ?>, Please enter the details to buy this policy :</h5>
<h5>Customer id :- <?php echo strtoupper ( $eid1 ); ?></h5>
<body>

<h2>Payment Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="transact.php">
      
        <div class="row">
          <div class="col-50">
          <!--<h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>-->

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444 in this format" minlength="19" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" minlength="4" maxlength="4"  required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"  minlength="3" maxlength="3" required>
               
              </div>
            </div>
          </div>
       
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
          <button class="btn btn-primary"  type= "submit" id="btn" name="p1">Pay </button>
          
    
        </div>
       <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>-->
       
      </form>

    


    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <!--<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">IPHONE</a> <span class="price">$1500</span></p>
      <p><a href="#">SAMSUNG</a> <span class="price">$500</span></p>
      <p><a href="#">OPPO</a> <span class="price">$400</span></p>
      <p><a href="#">HUAWEI</a> <span class="price">$200</span></p>
      <hr>-->
      <p>Total <span class="price" style="color:black"><b><?php echo $pp2 ?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>
