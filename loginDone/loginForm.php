
<?php

include 'dbconnection.php';


?>


<!DOCTYPE html>
<html>
<head>
  <style>
    input[type=text]
    {
     
     height: 26px;
     width: 250px;


    }
  input[type=password]
    {
     
     height: 26px;
     width: 250px;

    }
   input[type=submit]
    {
     
     height: 39px;
     width: 120px;
     background-color: indianred;
     border: none;
     font-size: 23px;


    }
body {
  
  width: 1200px;
  height: 600px;
}



  </style>
</head>
<body >
<h3 align="center" style="color: red;"><?php echo @$_GET["success"]; ?></h3>
<h3 align="center" style="color: red;"><?php echo @$_GET["invalid"]; ?></h3>

<h3 align="center" style="color: red;"><?php echo @$_GET["logout"]; ?></h3>

<form action="login.php" method="POST" >
<table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
 <tr> 
  <th colspan="6" align="center" style="background-color: indigo; color: white;"><h1>Secure Admin Login </h1></th>
  </tr>
<tr>
<th align="right">Username</th>
<td><input type="text" name="txtuser"></td>
</tr>

<tr>
<th align="right">Password</th>
<td><input type="password" name="txtpass"></td>
</tr>


<tr>

<td colspan = "2" align = "center">
<input type="submit" value="log in" id = "sub" name="sub"></td>
</tr>


</form>



</body>
</html>
