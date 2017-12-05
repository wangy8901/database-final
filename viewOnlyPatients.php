<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
//database connection
include 'dbconnection.php';
include 'bootstraplink.php';
   session_start();
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
                            <p> PATIENTS </p>
                            
                    </div>
		</div>
          <br>
        <?php
               
                   if (isset($_GET['delete'])){
                       $id = $_GET['delete'];
                $querydelete = "DELETE FROM `patient` WHERE PatientID=".$id;
                $res = mysqli_query($con, $querydelete);
                
                if($querydelete){
                     echo 'Record Deleted against Id: '.$id;
                }
                   
                    
                echo '<br>';
            }
          
        // put your code here
           
          
      // $query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
       $query = "select p.*,r.Type from patient as p join room as r on r.RoomID=p.RoomID";
  
       $result = mysqli_query($con, $query);
                                                    
           
            
            
                    
            echo '<table border=10 width="100%" class="table table-striped">';
            echo '<tr>'
            . '<th> Picture </th> '
            . '<th> Gender </th> '
            . '<th> Phone Number </th>'
            . '<th> Last Name </th>'
            . '<th> First Name </th>'
            . '<th> Age </th>'
            . '<th> Address</th>'
                     . '<th> Room Type </th>'
            . '<th> Report </th>' 
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result )){
                $picture = "uploads/" .$row['PatientID'].".jpg";
                
                echo '<tr>'
                        . '<td><img src='.$picture.' width = "100px" height = "100px" > </td>'
                        . '<td>'.$row['Gender'].'</td>'
                        . '<td>'.$row['PhoneNo'].'</td>'
                        . '<td>'.$row['LastName'].'</td>'
                        . '<td>'.$row['FirstName'].'</td>'
                        .'<td>'.$row['Age'].'</td>'
                        .'<td>'.$row['Address'].'</td>'
                        .'<td>'.$row['Type'].'</td>' 
                        .'<td>'.$row['description'].'</td>'                     
                   . '</tr>';
            } 
            
            echo '</table>';
            echo '<br>';
            echo '<div class="perfect">';
            echo '<a href = "logout.php" class = "btn btn-danger " > LOGOUT</a>';
            echo '</div>';
            ?>
     
    </body>
</html>
