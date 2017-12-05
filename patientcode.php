

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
     margin-right: 75px;

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

<form action="patientcode.php" method="POST" >
<table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
 <tr> 
  <th colspan="6" align="center" style="background-color: indigo; color: white;"><h1>SECURED  LOGIN </h1></th>
  </tr>
  
<tr>
<th align="center">USER NAME</th>
<td><input type="text" name="txtuser"></td>
</tr>

<tr>
<th align="center">PASSWORD</th>
<td><input type="password" name="txtpass"></td>
</tr>

<tr>
<td colspan = "2" align = "center">
<input type="submit" value="log in" id = "sub" name="sub">
</td>
</tr>


</form>



</body>
</html>

<?php
 //database connection
include 'dbconnection.php';
session_start();
if(isset($_POST['sub']))
{

    //the patient username and password
	$username = mysqli_real_escape_string($con, $_POST['txtuser']);
  $password = mysqli_real_escape_string($con, $_POST['txtpass']);
	$query = "SELECT * from patient WHERE (`Username`,`Password`) = ('$username','$password') ";
	$result  = mysqli_query($con, $query);
        if ($result ->num_rows > 0) {
           $row = $result->fetch_assoc();
         
             $_SESSION["login_user"] = $username;
             $_SESSION["login_user_id"] = $row['PatientID'];
            header("location:ViewOnlyOnePatient.php");
        }
        
	else
	{
		 header("location:patientlogin.php?invalid=Your User ID is Incorrect Please * TRY AGAIN *");
	}

}



?>
