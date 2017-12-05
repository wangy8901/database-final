<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//database connection
session_start();
include 'dbconnection.php';
include 'bootstraplink.php';
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>New Life Hospital</title>
          <style>
    .table td {
   text-align: center;   
}
       .table th{
   text-align: center;   
}
   .header{
	height: 150px;
	width: 500px;
        align-items: center;
	background-color: #ebebeb;
        border:  2px solid firebrick;
        border-radius: 15px;
        margin: auto;
}
P{
    font-size: 55px;
    margin: auto;
    text-align: center;
    margin-top: 20px;
}
.perfect{
   
    align-items: center;
    text-align: center;
}
body{
    background-color: #ebebeb;
}
        </style>
    </head>
    <body>
         <br>
        <div class="header">
			<div class="content">
                            <p> NURSES </p>
                            
                    </div>
		</div>
          <br>
        <?php
               
                   if (isset($_GET['delete'])){
                       $id = $_GET['delete'];
                $querydelete = "DELETE FROM `nurse` WHERE NurseID=".$id;
                $res = mysqli_query($con, $querydelete);
                
                if($querydelete){
                     echo 'Record Deleted against Id: '.$id;
                }
                   
                    
                echo '<br>';
            }
      // $query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
       // $query = "select * from nurse";


       $show_nurse_id = $_SESSION["show_nurse_id"];
       // $query = "SELECT p.LastName, p.FirstName, p.RoomID, b.BedID, p.Gender
       //            FROM patient p, nurse n, bed b, takecareof t
       //            WHERE n.NurseID = t.NurseID and
       //                  p.PatientID = t.PatientID and
       //                  p.RoomID = b.RoomID and
       //                  n.NurseID = '$show_nurse_id'";
       
       $query = "SELECT p.LastName, p.FirstName, p.RoomID, p.Gender, r.Type
                  FROM patient p, nurse n, takecareof t, room r
                  WHERE n.NurseID = t.NurseID and
                        p.PatientID = t.PatientID and
                        r.RoomID = p.RoomID and
                        n.NurseID = '$show_nurse_id'";
         
            $result = mysqli_query($con, $query);
            
            
           
            
            
                    
            echo '<table border=10 width="100%" class="table table-striped">';
            echo '<tr>'
            
            . '<td> Patient Name</td>' 
            . '<td> Gender</td>' 
            . '<td> Room</td>' 
            . '<td> Type</td>' 
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result)){
                  
                echo '<tr>'
                         
                        .'<td>'.$row['LastName']." ".$row['FirstName'].'</td>'  
                        .'<td>'.$row['Gender'].'</td>' 
                        .'<td>'.$row['RoomID'].'</td>'  
                        .'<td>'.$row['Type'].'</td>'                    
                . '</tr>';
            } 
           
            
     
            
            echo '</table>';
            echo '<br>';
           echo '<div class = "perfect" >';
            echo '<a href = "logout.php" class = "btn btn-danger " > LOGOUT</a>';
            echo '</div>';
        ?>
     
    </body>
</html>
