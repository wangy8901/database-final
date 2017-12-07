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
        <!-- styles for patients view -->
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
               
            
      // $query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
        if(isset($_SESSION["login_user_id"])){
             // $query = "select p.*,r.Type from patient as p join room as r on r.RoomID=p.RoomID WHERE `PatientID` = ".$_SESSION["login_user_id"];


             $show_p_id = $_SESSION["login_user_id"];
             $query = "SELECT p.*, r.Type, m.*
                    FROM patient AS p, room AS r, medicalrecord as m, examined_by as eb
                    WHERE p.RoomID = r.RoomID and
                        p.PatientID = eb.PatientID and
                        p.PatientID = m.PatientID and
                        p.PatientID = '$show_p_id'";
 
       
       $result = mysqli_query($con, $query);
                                                    
           
            
            //table to set dataview
                    
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
            . '<th> Prescription </th>' 
            . '<th> Medical Issue </th>'
            . '<th> Date of Examination </th>'
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result )){
                $picture = "uploads/" .$row['PatientID'].".jpg";
                
                echo '<tr>'
                        . '<td><img src="data:image;base64,'.$row['Image'].'" width = "100px" height = "100px"> </td>'
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

                   . '</tr>';
            } 
            
            echo '</table>';
            echo '<br>';
            echo '<div class="perfect">';
            echo '<a href = "logout.php" class = "btn btn-danger " > LOGOUT</a>';
            echo '</div>';
        }
      
            ?>
     
    </body>
</html>
