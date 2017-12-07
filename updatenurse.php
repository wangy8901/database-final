<?php
    
   $NurseID = $_POST['update_id'];
   $Gender = $_POST['gender'];
   $PhoneNo = $_POST['phoneNum'];
   $NurseName = $_POST['name'];
   $Address = $_POST['address'];
  
$con = mysqli_connect('localhost','root','','hospitall');
   
    $query ="update nurse set Gender='$Gender', PhoneNum='$PhoneNo', NurseName = '$NurseName',   Address = '$Address'  where NurseID= $NurseID";
   $result = mysqli_query($con, $query);
   
   
   if($result){
       
       echo ("<script>
       window.alert('Record updated')
       window.location.href='index.php';
       </script>");
       header("Location: ../hospitall/viewAllNurses.php");
   }
   else{
       echo ("<script>
       window.alert('sorry record not updated')
       </script>");
       header("Location: ../hospitall/viewAllNurses.php");
   }
?>

