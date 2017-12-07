<?php
    
   $PatientID = $_POST['update_id'];
   $Gender = $_POST['gender'];
   $PhoneNo = $_POST['phoneNum'];
   $LastName = $_POST['lastname'];
   $FirstName = $_POST['firstname'];
   $Age = $_POST['age'];
   $Address = $_POST['address'];
   $Prescription = $_POST['Prescription'];
   $MedicalIssue = $_POST['MedicalIssue'];
   $DateOfExamination = $_POST['DateOfExamination'];
   $RecordID = $_POST['Recordid'];
   
$con = mysqli_connect('localhost','root','','hospitall');
   
    // $query = "UPDATE patient set Gender='$Gender', PhoneNo='$PhoneNo', LastName='$LastName', FirstName = '$FirstName', Age = '$Age', "
    //         . " Address = '$Address', description = ' $Description'      where PatientID=$PatientID";

    mysqli_autocommit($con,FALSE);

    $query = "UPDATE patient SET Gender='$Gender', PhoneNo='$PhoneNo', LastName='$LastName', FirstName = '$FirstName', Age = '$Age', Address = '$Address' WHERE PatientID = '$PatientID'";

    $query2 = "UPDATE medicalrecord SET MedicalIssue = '$MedicalIssue', Prescription = '$Prescription', DateOfExamination = '$DateOfExamination' WHERE RecordID = '$RecordID'";



   $result = mysqli_query($con, $query);
   $result2 = mysqli_query($con, $query2);
   
   if($result && $result2){
       
       mysqli_commit($con);
       
       echo ("<script>
       window.alert('Record updated')
       window.location.href='viewpatientstodoctor.php';
       </script>");
       
   }
   else{
       echo ("<script>
       window.alert('sorry record not updated')
       </script>");
   }
?>

