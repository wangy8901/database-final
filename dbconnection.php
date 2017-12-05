<?php

// a saparate file of databse connection so it is being used in all the php files through link 
// rather to write it again and again.
$con = mysqli_connect('localhost', 'root', '', 'hospitall');
if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   
?>

