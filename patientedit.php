<?php

include 'dbconnection.php';
    include 'bootstraplink.php';

if ($_GET['id']){
    $id = $_GET['id'];
    
    $query = "select * from patient where PatientID = ".$id;
    //$query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
    $result = mysqli_query($con, $query);
    
    if($result){
    $row = mysqli_fetch_assoc($result);
    
    ?>
    <form action="updatepatient.php" method="post" enctype="multipart/form-data">
        <P>PROFILE PICTURE:</P> <input type="file"  name="fileToUpload" id="fileToUpload" value="<?php echo $row['Image_name']; ?>" >
                <p> GENDER </p> <input type="text" required="true" name="gender" value="<?php echo $row['Gender']; ?> " placeholder="Gender" style="height: 43px; width: 200px"><br>
                 <p> PHONE NUMBER </p> <input type="text" required="true"  name="phoneNum" value="<?php echo $row['PhoneNo']; ?> " placeholder="Phone Number" style="height: 43px; width: 200px"><br>
               <p> LAST NAME </p> <input type="text" required="true" name="lastname" value="<?php echo $row['LastName']; ?> "  style="height: 43px; width: 200px"><br>
                   <p> FIRST NAME </p> <input type="text" required="true" name="firstname" value="<?php echo $row['FirstName']; ?> " placeholder="First Name" style="height: 43px; width: 200px"><br>
                   <p> AGE </p> <input type="text" required="true" name="age" value="<?php echo $row['Age']; ?>" placeholder="Age" style="height: 43px; width: 200px"><br>     
               <p> ADDRESS </p> <input type="text" required="true" name="address" value="<?php echo $row['Address']; ?> " placeholder="Address" style="height: 43px; width: 200px"><br>
               
                <!-- <p> DESCRIPTION </p> <input type="text" required="true" name="description" value="<?php echo $row['description']; ?> " placeholder="Description" style="height: 43px; width: 200px"><br> -->
                <input type="hidden" name="update_id" value="<?php echo $row['PatientID'];  ?>" >
                <br>
 
             <a href="#"><input type="submit" required="true" name="update" value="update" class = "btn btn-primary "></a> 

 </form>

<?php
}
}
?>

