<?php
    
   $DoctorID = $_POST['update_id'];
   $Gender = $_POST['gender'];
   $PhoneNo = $_POST['phoneNum'];
   $LastName = $_POST['lastname'];
   $FirstName = $_POST['firstname'];
   $Address = $_POST['address'];
  
$con = mysqli_connect('localhost','root','','hospitall');
   
    $query ="update doctor set Gender='$Gender', PhoneNum='$PhoneNo', LastName='$LastName', FirstName = '$FirstName',   Address = '$Address'  where DoctorID= $DoctorID";
   $result = mysqli_query($con, $query);
   
   
   if($result){
       
       echo ("<script>
       window.alert('Record updated')
       window.location.href='index.php';
       </script>");
   }
   else{
       echo ("<script>
       window.alert('sorry record not updated')
       </script>");
   }
?>

