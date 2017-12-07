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
                            <p> Room Information </p>
                            
                    </div>
		</div>
          <br>
        <?php
        echo '<br>';
        
        $sqlroom = "SELECT r.RoomID, r.Type, count(p.PatientID) as total
                FROM patient p, room r
                WHERE p.RoomID = r.RoomID
                GROUP BY r.RoomID
                ORDER BY count(p.PatientID), r.Type DESC
                ";
        
         $resroom = mysqli_query($con, $sqlroom);
         
         echo '<table border=10 width="50px" class="table table-striped">';
         echo '<tr>'
            . '<th> Room ID </th> '
            . '<th> Room Type </th> '
            . '<th> Number of patients </th> '
            .'</tr>';
            while ($rowroom = mysqli_fetch_assoc($resroom)){
                echo '<tr>'

                        . '<td>'.$rowroom['RoomID'].'</td>'
                        . '<td>'.$rowroom['Type'].'</td>'
                        . '<td>'.$rowroom['total'].'</td>'
                . '</tr>';
            }
            echo '</table>';
            echo '<br>';
           echo '<div class = "perfect" >';
            echo '<a href = "logout.php" class = "btn btn-danger " > LOGOUT</a>';
            echo '</div>';
        ?>
          
          <!DOCTYPE html>
<!--
All Patients Data
-->

<?php
//database connection
include 'dbconnection.php';
include 'bootstraplink.php';
   // session_start();
   echo '<br />'
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>www.newlifehospital.com</title>
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
                            <p> Patient Report </p>
                            
                    </div>
		</div>
          <br>
        <?php
        echo '<br>';
               
        $query="SELECT m.RecordID, p.PatientID, p.FirstName, p.LastName, r.Type ,m.MedicalIssue, m.Prescription
                FROM medicalrecord m , patient p , room r 
                WHERE m.PatientID=p.PatientID
                AND r.RoomID = p.RoomID";
       
         
            $result = mysqli_query($con, $query);
        // echo "SELECT p.FirstName, p.LastName, r.Type ,m.MedicalIssue, m.Prescription<br>
        //         FROM medicalrecord m , patient p , room r <br>
        //         WHERE m.PatientID=p.PatientID<br>
        //         AND r.RoomID = p.RoomID<br>";
            echo '<table border=10 width="100%" class="table table-striped">';
//            echo '<tr>'
//             . '<th> Picture </th> '
//            . '<td> Nurse Name </td>'
//            . '<td> Phone Number </td>'
//            . '<td> Gender</td>' 
//            . '<td> Address</td>' 
//            .'</tr>';
            echo '<tr>'
            . '<th> Record ID </th> '
            . '<th> Patient ID </th> '
            . '<th> First Name </th> '
            . '<th> Last Name </th>'
            . '<th> Room Type </th>'
            . '<th> Medical Issue</th>' 
            . '<th> Prescription</th>' 
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result)){
                echo '<tr>'

                        . '<td>'.$row['RecordID'].'</td>'
                        . '<td>'.$row['PatientID'].'</td>'
                        . '<td>'.$row['FirstName'].'</td>'
                        . '<td>'.$row['LastName'].'</td>'
                        . '<td>'.$row['Type'].'</td>'
                        .'<td>'.$row['MedicalIssue'].'</td>'
                        .'<td>'.$row['Prescription'].'</td>'
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

          
          
          
          
          
          
     
    </body>
</html>
