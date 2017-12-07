<!DOCTYPE html>

<?php
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
	<h1>DOCTOR SIGN UP</h1>
    <!-- Form started-->
    <form action="" method="post" enctype="multipart/form-data">
        <p> PROFILE PICTURE</p> <input type="file" name="fileToUpload" id="fileToUpload"  style="height: 43px; width: 200px">
                <br>
                <p> FIRST NAME </p> <input type="text" required="true" name="firstname" placeholder="First Name" style="height: 43px; width: 200px"><br>
                  <p> LAST NAME </p> <input type="text" required="true" name="lastname" placeholder="Last Name" style="height: 43px; width: 200px"><br>
                    <p> GENDER </p> <input type="text" required="true" name="gender" placeholder="Gender" style="height: 43px; width: 200px"><br>
                    <p> PHONE NUMBER </p> <input type="number" required="true" name="phoneNum" placeholder="Phone Number" style="height: 43px; width: 200px"><br>
                          <p> ADDRESS </p> <input type="text" required="true" name="address" placeholder="Address" style="height: 43px; width: 200px"><br>
                          <p> DOCTOR ID </p> <input type="text" required="true" name="username" placeholder="Doctor ID" style="height: 43px; width: 200px"><br>
        <a href="#"><input type="submit" required="true" name="button" value="SUBMIT"></a> 
		</form>
    <!-- Form ended-->
	 </div>
    <?php
                                            if (isset($_POST['button'])) {
                                                    if($_FILES['fileToUpload']['tmp_name'] != null || $_FILES['fileToUpload']['name'] != null){
                                                        $image = addslashes($_FILES['fileToUpload']['tmp_name']);
	                                                    $image_name = addslashes($_FILES['fileToUpload']['name']);
	                                                    $image = file_get_contents($image);
	                                                    $image = base64_encode($image);
                                                    }
													$firstName = $_POST['firstname'];
                                                    $lastName = $_POST['lastname'];
                                                    $gender = $_POST['gender'];
                                                    $phoneNum = $_POST['phoneNum'];
                                                    $address = $_POST['address'];
                                                    $username = $_POST['username'];
                                                    //$loginID= $_POST['loginid'];
                                                     //$target_dir = "uploads/";
                                                 $query = "INSERT INTO doctor (LastName,FirstName,PhoneNum,Gender,Address, DoctorID, Image_name, Image) values('$lastName','$firstName','$phoneNum','$gender','$address', '$username', '$image_name', '$image')";
                                                   $queryCheckRecord = "select * from doctor where DoctorID = '$username'";
                    $resultCheck = mysqli_query($con, $queryCheckRecord);
                   
                    if($resultCheck->num_rows > 0){
                        echo '<script> 
                                 window.alert("Login ID Already Exist Please choose a different Login ID");
                             </script>';
                    }
                                          else{      
                                                    $result = mysqli_query($con, $query);
                                                    
                                                if ($result) {
                                                    //$user_id = mysqli_insert_id($con);
                    
                    //$target_file = $target_dir . $user_id. '.jpg';
                    
                    //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    
                    
                    echo ("<script LANGUAGE= 'javascript'>
                        window.location.href='viewAllDoctors.php';
                                                       </script>");
                                                } else {
                                                    '<script> window.alert("fail");
                                                                    </script>';
                                                }
                                            }}
                                            ?>

     <!-- Form Validation-->
	 
 
 
  </body> <!-- end body -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</html><!-- end html -->