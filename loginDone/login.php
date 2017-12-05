
<?php
 
include 'dbconnection.php';
session_start();
if(isset($_POST['sub']))
{

	$username = $_POST['txtuser'];
	$password = $_POST['txtpass'];

	$query = "select * from login where username = '$username' and password = '$password' ";

	$exe_query = mysqli_query($con, $query);


	$result = mysqli_num_rows($exe_query);
        
	if($result == 1)
	{


     $_SESSION["login_user"] = $username;

     header("location:ViewAllPatients.php");

	}
	else
	{
		 header("location:loginForm.php?invalid=You User Name or Password is Incorrect Please Try Again");
	}

}



?>
