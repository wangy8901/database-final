<?php

include 'dbconnection.php';
    include 'bootstraplink.php';

if ($_GET['id']){
    $id = $_GET['id'];
    
    // $query = "select * from patient where PatientID = ".$id;
    $query2 = "SELECT * FROM medicalrecord WHERE RecordID = '$id'";
    
    $query = "SELECT p.Gender, p.PhoneNo, p.LastName, p.FirstName, p.Age, p.Address, m.RecordID
    FROM medicalrecord m, patient p WHERE p.PatientID = m.PatientID AND m.RecordID = '$id'";
    //$query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
    $result = mysqli_query($con, $query);
    $result2 = mysqli_query($con, $query2);
    
    if($result){
    $row = mysqli_fetch_assoc($result);

    if($result2){
      $row2 = mysqli_fetch_assoc($result2);
    }
    
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Life Hospital</title>
        
          <style> 
              
             .perfect{
   
    align-items: center;
    text-align: center;
}
              
        </style>
<form action="updatepatientbydoctor.php" method="post">
    
               <input type="hidden" required="true" name="gender" value="<?php echo $row['Gender']; ?> " placeholder="Gender" style="height: 43px; width: 200px"><br>
                <input type="hidden" required="true"  name="phoneNum" value="<?php echo $row['PhoneNo']; ?> " placeholder="Phone Number" style="height: 43px; width: 200px"><br>
              <input type="hidden" required="true" name="lastname" value="<?php echo $row['LastName']; ?> "  style="height: 43px; width: 200px"><br>
                 <input type="hidden" required="true" name="firstname" value="<?php echo $row['FirstName']; ?> " placeholder="First Name" style="height: 43px; width: 200px"><br>
                  <input type="hidden" required="true" name="age" value="<?php echo $row['Age']; ?>" placeholder="Age" style="height: 43px; width: 200px"><br>     
               <input type="hidden" required="true" name="address" value="<?php echo $row['Address']; ?> " placeholder="Address" style="height: 43px; width: 200px"><br>
                <input type="hidden" required="true" name="Recordid" value="<?php echo $row['RecordID']; ?> " placeholder="Recordid" style="height: 43px; width: 200px"><br>
               




               <div class="perfect">
                   <p> Prescription </p> <input type="text" required="true" name="Prescription" value="<?php echo $row2['Prescription']; ?> " placeholder="Prescription" style="height: 43px; width: 600px"><br>
               
                   <input type="hidden" name="update_id" value="<?php echo $row2['RecordID'];  ?>" >
                <br>





                <p> Medical Issue </p> <input type="text" required="true" name="MedicalIssue" value="<?php echo $row2['MedicalIssue']; ?> " placeholder="MedicalIssue" style="height: 43px; width: 600px"><br>
               
                   <input type="hidden" name="update_id" value="<?php echo $row2['RecordID'];  ?>" >
                <br>




                <p> Date of Examination </p> <input type="date" required="true" name="DateOfExamination" value="<?php echo $row2['DateOfExamination']; ?> " placeholder="DateOfExamination" style="height: 43px; width: 600px"><br>
               
                   <input type="hidden" name="update_id" value="<?php echo $row2['RecordID'];  ?>" >
                <br>
                






                





             <a href="#"><input type="submit" required="true" name="update" value="update" class = "btn btn-primary "></a> 
</div>
 </form>

<?php
}
}
?>

