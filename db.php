<?php

$conn=mysqli_connect('localhost','root','','mywebsite');
if(mysqli_connect_errno()){
    echo 'connection failed to MySql'.mysqli_connect_errno();
}
?>

    