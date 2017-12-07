<?php
    
   $DoctorID = $_POST['update_id'];
   $Gender = $_POST['gender'];
   $PhoneNo = $_POST['phoneNum'];
   $LastName = $_POST['lastname'];
   $FirstName = $_POST['firstname'];
   $Address = $_POST['address'];
   
   if($_FILES['fileToUpload']['tmp_name'] != null || $_FILES['fileToUpload']['name'] != null){
        $image = addslashes($_FILES['fileToUpload']['tmp_name']);
	    $image_name = addslashes($_FILES['fileToUpload']['name']);
	    $image = file_get_contents($image);
	    $image = base64_encode($image);
   }
    
$con = mysqli_connect('localhost','root','','hospitall');
   
    $query ="update doctor set Gender='$Gender', PhoneNum='$PhoneNo', LastName='$LastName', FirstName = '$FirstName',   Address = '$Address', Image_name = '$image_name', Image = '$image'  where DoctorID= $DoctorID";
   $result = mysqli_query($con, $query);
   
   
   if($result){
       
       echo ("<script>
       window.alert('Record updated')
       window.location.href='index.php';
       </script>");
       header("Location: ../hospitall/viewAllDoctors.php");
   }
   else{
       echo ("<script>
       window.alert('sorry record not updated')
       </script>");
       header("Location: ../hospitall/viewAllDoctors.php");
   }
?>

