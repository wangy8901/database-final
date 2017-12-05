

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
     margin-right: 75px;


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
  

  width: 100%;
  height: 600px;
}





  </style>
</head>
<body >
<h3 align="center" style="color: red;"><?php echo @$_GET["success"]; ?></h3>
<h3 align="center" style="color: red;"><?php echo @$_GET["invalid"]; ?></h3>
<h3 align="center" style="color: red;"><?php echo @$_GET["logout"]; ?></h3>

<form action="frontdeskPassword.php" method="POST" >
<table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
 <tr> 
  <th colspan="6" align="center" style="background-color: indigo; color: white;"><h1>SECURED  LOGIN </h1></th>
  </tr>
<tr>
<th align="center">ID</th>
<td><input type="text" name="txtuser"></td>
<th align="center">PASSWORD</th>
<td><input type="password" name="password"></td>
</tr>

<tr>

<td colspan = "2" align = "center">
<input type="submit" value="log in" id = "sub" name="sub"></td>
</tr>


</form>



</body>
</html>

<?php
 
include 'dbconnection.php';
session_start();
if(isset($_POST['sub']))
{

	$username = mysqli_real_escape_string($con, $_POST['txtuser']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

	$query = "SELECT * from frontdesk where Username = '$username' and Password = '$password' ";

	$exe_query = mysqli_query($con, $query);


	$result = mysqli_num_rows($exe_query);
	if($result == 1)
	{

            //it works till the user got logout.
            
     $_SESSION["login_user"] = $username;
     
    
     header("location:addPatientByFrontDesk.php");

	}
	else
	{
		 header("location:frontdeskPassword.php?invalid=Your User Name or Password is Incorrect Please * TRY AGAIN *");
	}

}



?>
