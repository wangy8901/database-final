<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

session_start();
//database connection
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
    font-size: 32px;
    margin: auto;
    text-align: center;
    margin-top: 40px;
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
                            <p> WRITE REPORTS ON PATIENTS </p>
                            
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
       // $query = "select p.*,r.Type from patient as p join room as r on r.RoomID=p.RoomID";
  
       //                                              $result = mysqli_query($con, $query);

        $show_doctor_id = $_SESSION["show_doctor_id"];
        $query = "SELECT p.*, r.Type, m.*
                    FROM patient AS p, room AS r, doctor as d, examined_by as eb, medicalrecord as m
                    WHERE p.RoomID = r.RoomID and
                        p.PatientID = eb.PatientID and
                        p.PatientID = m.PatientID and
                        d.DoctorID = eb.DoctorID and
                        d.DoctorID = '$show_doctor_id'";
  
                                                    $result = mysqli_query($con, $query);
                                                    
         
            
            
                    
            echo '<table border=10 width="100%" class="table table-striped" class="table-responsive">';
            echo '<tr>'
            
            . '<th> Gender </th> '
            . '<th> Phone Number </th>'
            . '<th> Last Name </th>'
            . '<th> First Name </th>'
            . '<th> Age </th>'
            . '<th> Address</th>'
            . '<th> Room Type </th>'
            . '<th> Prescription </th>' 
            . '<th> Medical Issue </th>'
            . '<th> Date of Examination </th>'
            . '<th> Write Report </th>'
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result )){
                
                echo '<tr>'
                        . '<td>'.$row['Gender'].'</td>'
                        . '<td>'.$row['PhoneNo'].'</td>'
                        . '<td>'.$row['LastName'].'</td>'
                        . '<td>'.$row['FirstName'].'</td>'
                        .'<td>'.$row['Age'].'</td>'
                        .'<td>'.$row['Address'].'</td>'
                        .'<td>'.$row['Type'].'</td>' 
                        .'<td>'.$row['Prescription'].'</td>'
                        .'<td>'.$row['MedicalIssue'].'</td>'
                        .'<td>'.$row['DateOfExamination'].'</td>'
                        .'<td><a href="patienteditReport.php? id='.$row['PatientID'].'" class = "btn btn-success "> Edit </a></td>'                     
                   . '</tr>';
            } 
            
            echo '</table>';
            echo '<br>';
        
            echo '<div class="perfect">';
            echo '<br>';
               echo '<br>';
            echo '<a href = "logout.php" class = "btn btn-danger "  > LOGOUT</a>';
             echo '</div>';
        ?>
     
    </body>
</html>
