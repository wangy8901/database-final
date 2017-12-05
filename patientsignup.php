<!DOCTYPE html>

<?php
//database connection
include 'dbconnection.php';
 
$query = "SELECT * FROM room";
$result = mysqli_query($con, $query);

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
            <h1>PATIENT</h1>
            <!-- Form started-->
            <form action="" method="post" enctype="multipart/form-data">
                <p> PROFILE PICTURE</p> <input type="file" name="fileToUpload" id="fileToUpload"  style="height: 43px; width: 200px">
                <br>
                <p> FIRST NAME </p> <input type="text" required="true" name="firstname" placeholder="First Name" style="height: 43px; width: 200px"><br>
                  <p> LAST NAME </p> <input type="text" required="true" name="lastname" placeholder="Last Name" style="height: 43px; width: 200px"><br>
                    <p> GENDER </p> <input type="text" required="true" name="gender" placeholder="Gender" style="height: 43px; width: 200px"><br>
                    <p> PHONE NUMBER </p> <input type="number" required="true" name="phoneNum" placeholder="Phone Number" style="height: 43px; width: 200px"><br>
                        <p> AGE </p> <input type="number" required="true" name="age" placeholder="Age" style="height: 43px; width: 200px"><br>
                          <p> ADDRESS </p> <input type="text" required="true" name="address" placeholder="Address" style="height: 43px; width: 200px"><br>
                          <p> ROOM TYPE </p> <select name="room" style="height: 43px; width: 200px">
                              <?php
                              while ($row = mysqli_fetch_assoc($result)){
                                  echo '<option value ='.$row['RoomID'].'>'.$row['Type'].'</option>';
                              }
                              
                              ?>
                          </select>
                          <br>
                          
                <p> USER NAME </p> <input type="text" required="true" name="username" placeholder="User Name" style="height: 43px; width: 200px"><br>
                          <p> PASSWORD </p> <input type="text" required="true" name="password" placeholder="Password" style="height: 43px; width: 200px"><br>
                                          <a href="#"><input type="submit" required="true" name="button" value="SUBMIT"></a>

            </form>
            <!-- Form ended-->

           
            <?php
           
                if (isset($_POST['button'])) {
                    $firstName = $_POST['firstname'];
                    $lastName = $_POST['lastname'];
                    $gender = $_POST['gender'];
                    $phoneNumber = $_POST['phoneNum'];
                    $age = $_POST['age'];
                    $address = $_POST['address'];
                    $roomId = $_POST['room'];
                    
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $target_dir = "uploads/";
                    $queryCheckRecord = "select * from patient where username = '$username'";
                    $resultCheck = mysqli_query($con, $queryCheckRecord);
                   
                    if($resultCheck->num_rows > 0){
                        echo '<script> 
                                 window.alert("User Name Already Exist Please choose a different User Name");
                             </script>';

                    }else{
                        $query = "INSERT INTO patient (Gender, PhoneNo, LastName, FirstName, Age, Address,  RoomID, Username, Password) values('$gender', '$phoneNumber','$lastName','$firstName','$age','$address','$roomId','$username','$password')";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            $user_id = mysqli_insert_id($con);
                            $target_file = $target_dir . $user_id. '.jpg';
                            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                            echo ("<script LANGUAGE= 'javascript'>
                            window.location.href='viewAllPatients.php';
                                                           </script>");
                        } else {
                            echo '<script> window.alert("fail");
                                                                        </script>';
                        }
                    }
    
            }
            ?>
        </div>

        <!-- Form Validation-->
        


    </body> <!-- end body -->
</html><!-- end html -->