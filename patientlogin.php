<!DOCTYPE html>
<?php
//database connection
include 'dbconnection.php';
?>
<html>
<head>
	<title>New Life Hospital</title>
   <!-- css style sheet link -->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<!-- The body start -->
<body>

	<div class="alignCenter">
	<h1>PATIENT LOGIN</h1>
    <!-- Form started-->
<!--		<form action="">
		  <p>USER NAME</p> <input type="text" name="username" placeholder="Name" style="height: 43px; width: 200px"><br>
		  <p>PASSWORD</p> <input type="text" name="password" placeholder="password"  style="height: 43px; width: 200px"><br>
                  <a href=""> <input type="submit" id="sub" name="button" value="Submit"></a>
		</form>-->
    <!-- Form ended-->
        <?php
                        include 'patientcode.php';
                        
//                                            if (isset($_POST['button'])) {
//                                                $username = $_POST['username'];
//                                                $password = $_POST['password'];
//
//                                               $query = "INSERT INTO patientlogin (username, Password) values('$username', '$password')";
//                                                 
//                                                    $result = mysqli_query($con, $query);
//                                                    
//                                                if ($result) {
//                                                    echo ("<script LANGUAGE= 'javascript'>
//                                                    window.location.href='viewpatientrecord.php';
//                                                        </script>");
//                                                   
//
//                                                   
//                                                } else {
//                                                    '<script> window.alert("fail");
//                                                                    </script>';
//                                                }
//                                            }
                                            ?>
	 </div>

  </body> <!-- end body -->
</html><!-- end html -->