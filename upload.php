<?php

require ('db.php');
require ('process.php');
?>
<!doctype html>
<html>
    <head>
        <title>Test</title>
    </head>
   <center><h1>Please upload required files to process further</h1><br><br></center>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <center><body>
      <style>
  body{

  background-image: url("i5.jpg");

  

  /* Center and scale the image nicely */
  
  background-repeat: no-repeat;
   background-size: cover;
  
}

</style>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="my_file[]" multiple><br><br><br>
            <input type="submit" value="Upload"><br>
        </form>
        </head>
    
        <?php

            if (isset($_FILES['my_file'])) {
                $myFile = $_FILES['my_file'];
                $fileCount = count($myFile["name"]);

          
               	 for ($i = 0; $i < $fileCount; $i++) {
                    
          			?>          

                        <p>File Details <?= $i+1 ?>:</p>
                       <p>
                            Name: <?= $myFile["name"][$i] ?><br>
                            Type: <?= $myFile["type"][$i] ?><br>
                            Size: <?= $myFile["size"][$i] ?><br>
                            
                        </p>

                  					
                    <?php

	                }

                
            }
            
        ?>

<br><br><br>


<br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?> ">
 <button type= "submit" name="verify">Verify</button>

    </body></form></body></center>

   

</html>
<?php
require ('db.php');
if(isset($_POST['verify'])){
header ('Location: payment.php');}?>