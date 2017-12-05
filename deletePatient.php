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
    </head>
    <body>
        <?php
        
        // delete patient through the id of that specific patient.
               
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
            
            
           
            
            
                    
            echo '<table border=10 width="70%">';
            echo '<tr>'
            
            . '<th> Gender </th> '
            . '<th> Phone Number </th>'
            . '<th> Last Name </th>'
            . '<th> First Name </th>'
            . '<th> Age </th>'
            . '<th> Address</th>'
            . '<th> Password</th>'
            . '<th> Room ID</th>'   
                . ' <th> Edit </th>'
                . '<th> Delete </th>'
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result)){
                // the row is a variable which gets the data from the databse
                echo '<tr>'
                        . '<td>'.$row['Gender'].'</td>'
                        . '<td>'.$row['PhoneNo'].'</td>'
                        . '<td>'.$row['LastName'].'</td>'
                        . '<td>'.$row['FirstName'].'</td>'
                        .'<td>'.$row['Age'].'</td>'
                        .'<td>'.$row['Address'].'</td>'
                        .'<td>'.$row['Password'].'</td>'
                        .'<td>'.$row['Type'].'</td>' 
                        .'<td><a href="edit.php? id='.$row['PatientID'].'"  class = "btn btn-success "> Edit </a></td>'
                        .'<td> <a href="?delete='.$row['PatientID'].'"  class = "btn btn-danger ">Delete</a> </td>'                      
                   . '</tr>';
            } 
            
            echo '</table>';
            echo '<br>';
           
            echo '<a href = "logout.php" class = "btn btn-success " > LOGOUT</a>';
        ?>
     
    </body>
</html>
