<?php

    //$target_dir = "uploads/";
   $PatientID = $_POST['update_id'];
   $Gender = $_POST['gender'];
   $PhoneNo = $_POST['phoneNum'];
   $LastName = $_POST['lastname'];
   $FirstName = $_POST['firstname'];
   $Age = $_POST['age'];
   $Address = $_POST['address'];
   $RoomID = $_POST['roomid'];
   
   if($_FILES['fileToUpload']['tmp_name'] != null || $_FILES['fileToUpload']['name'] != null){
       $image = addslashes($_FILES['fileToUpload']['tmp_name']);
	$image_name = addslashes($_FILES['fileToUpload']['name']);
	$image = file_get_contents($image);
	$image = base64_encode($image);
   }
   
   
   
   
$con = mysqli_connect('localhost','root','','hospitall');

    // if($image == null )
   
    $query = "update patient set Gender='$Gender', PhoneNo='$PhoneNo', LastName='$LastName', FirstName = '$FirstName', Age = '$Age', "
            . " Address = '$Address', Image_name = '$image_name', Image = '$image', RoomID = '$RoomID'      where PatientID=$PatientID";
   $result = mysqli_query($con, $query);
   
   if($result){
       
                    //$user_id = mysqli_insert_id($con);
                    
                    //$target_file = $target_dir . $user_id. '.jpg';
                    
                    //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    
       echo ("<script>
       window.alert('Record updated')
       window.location.href='viewAllPatients.php';
       </script>");
   }
   else{
       echo ("<script>
       window.alert('sorry record not updated')
       </script>");
   }
?>

