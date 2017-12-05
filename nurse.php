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
	<h1>NURSE</h1>
    <!-- Form started-->
    <form action="" method="post" enctype="multipart/form-data">
	 <p> PROFILE PICTURE</p> <input type="file" name="fileToUpload" id="fileToUpload"  style="height: 43px; width: 200px">
                <br>	
        <p> NAME </p> <input type="text" name="name" placeholder="Name" style="height: 43px; width: 200px"> <br>
                <p> PHONE NUMBER </p> <input type="number" name="phoneNum" placeholder="Phone Number" style="height: 43px; width: 200px"> <br>
                <p> GENDER </p> <input type="text" name="gender" placeholder="Gender" style="height: 43px; width: 200px"> <br>
                <p> ADDRESS </p> <input type="text" name="address" placeholder="Address" style="height: 43px; width: 200px"> <br>
               <p> NURSE ID </p> <input type="text" required="true" name="nurseid" placeholder="Nurse ID" style="height: 43px; width: 200px"><br>

               <a href="#"><input type="submit" name="button" value="SUBMIT"></a>
		</form>
    <!-- Form ended-->
<?php
           // the login for nurse
                if (isset($_POST['button'])) {
                    $name = $_POST['name'];
                    $phoneNumber = $_POST['phoneNum'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];
                    $nurseID= $_POST['nurseid'];
                    $target_dir = "uploads/";
                     $queryCheckRecord = "select * from nurse where NurseID = '$nurseID'";
                    $resultCheck = mysqli_query($con, $queryCheckRecord);
                    
                     if($resultCheck->num_rows > 0){
                        echo '<script> 
                                 window.alert("Nurse ID Already Exist Please choose a different Nurse ID");
                             </script>';

                    } else{
                $query = "INSERT INTO nurse (NurseName, PhoneNum, Gender, Address, NurseID) values('$name','$phoneNumber','$gender','$address', '$nurseID')";
                $querytwo = "insert into nurse (NurseID) values ('$nurseID')";
               
                $result = mysqli_query($con, $query);
                $resulttwo = mysqli_query($con, $querytwo);
                
                if ($result && $resulttwo) {
                      $user_id = mysqli_insert_id($con);
                    
                    $target_file = $target_dir . $user_id. '.jpg';
                     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    
                     echo ("<script LANGUAGE= 'javascript'>
                        window.location.href='viewAllNurses.php';
                                                       </script>");
                } else {
                   echo '<script> window.alert("Record Updated");
                                                                    </script>';
                }
                }
            }
            
            ?>
	 </div>

   <!-- Form Validation-->
	 
 
 
  </body> <!-- end body -->
</html><!-- end html -->