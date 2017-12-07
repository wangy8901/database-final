<?php

include 'dbconnection.php';
    include 'bootstraplink.php';

if ($_GET['id']){
    $id = $_GET['id'];
    
    $query = "select * from doctor where DoctorID = ".$id;
    //$query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
    $result = mysqli_query($con, $query);
    
    if($result){
    $row = mysqli_fetch_assoc($result);
    
    ?>
    <form action="updatedoctor.php" method="post" enctype="multipart/form-data">
        <P>PROFILE PICTURE:</P> <input type="file"  name="fileToUpload" id="fileToUpload" value="<?php echo $row['Image_name']; ?>" >
                <p> LAST NAME </p> <input type="text" required="true" name="lastname" value="<?php echo $row['LastName']; ?> "  style="height: 43px; width: 200px"><br>
                <p> FIRST NAME </p> <input type="text" required="true" name="firstname" value="<?php echo $row['FirstName']; ?> " placeholder="First Name" style="height: 43px; width: 200px"><br>    
               <p> PHONE NUMBER </p> <input type="text" required="true"  name="phoneNum" value="<?php echo $row['PhoneNum']; ?> " placeholder="Phone Number" style="height: 43px; width: 200px"><br>
               <p> GENDER </p> <input type="text" required="true" name="gender" value="<?php echo $row['Gender']; ?> " placeholder="Gender" style="height: 43px; width: 200px"><br>
               <p> ADDRESS </p> <input type="text" required="true" name="address" value="<?php echo $row['Address']; ?> " placeholder="Address" style="height: 43px; width: 200px"><br>
              
               
                <input type="hidden" name="update_id" value="<?php echo $row['DoctorID'];  ?>" >
                <br>
 
             <a href="#"><input type="submit" required="true" name="update" value="update" class = "btn btn-primary "></a> 

 </form>

<?php
}
}
?>

