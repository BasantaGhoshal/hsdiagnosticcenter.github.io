<?php 
   $con = new mysqli('localhost','root','','hsd');
     if (!$con) {
     	die(mysqli_error($con));
     }
     
?>