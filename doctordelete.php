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
                            <p> DOCTORS </p>
                            
                    </div>
		</div>
          <br>
        <?php
               
                   if (isset($_GET['delete'])){
                       $id = $_GET['delete'];
                $querydelete = "DELETE FROM `doctor` WHERE DoctorID=".$id;
                $res = mysqli_query($con, $querydelete);
                
                if($querydelete){
                     echo 'Record Deleted against Id: '.$id;
                }
                   
                    
                echo '<br>';
            }
          
        // put your code here
           
          
      // $query = "select student.*, departments.dept_name from student JOIN departments ON (student.dept= departments.id)";
       $query = "select * from doctor";
       
         
            $result = mysqli_query($con, $query);
            
            
           
            
            
                    
            echo '<table border=10 width="100%" class="table table-striped">';
            echo '<tr>'
              . '<th> Picture </th> '
            . '<th> Last Name </th>'
            . '<th> First Name </th>'
            . '<th> PhoneNum </th>'
            . '<th> Gender </th>'
            . '<th> Address</th>' 
            . ' <th> Edit </th>'
            . '<th> Delete </th>'
            .'</tr>';
            while ($row = mysqli_fetch_assoc($result)){
                $picture = "uploads/" .$row['DoctorID'].".jpg";
                 $id = $row['DoctorID'];
                echo '<tr>'
                       . '<td><img src='.$picture.' width = "100px" height = "100px" > </td>'

                        . '<td>'.$row['LastName'].'</td>'
                        . '<td>'.$row['FirstName'].'</td>'
                        . '<td>'.$row['PhoneNum'].'</td>'
                        . '<td>'.$row['Gender'].'</td>'
                        .'<td>'.$row['Address'].'</td>' 
                        .'<td><a href="doctoredit.php? id='.$row['DoctorID'].'" class = "btn btn-info "> Edit </a></td>'
                        .'<td> <a href="javascript:void(0)" class = "btn btn-danger _deleteClick" data-id = '.$row['DoctorID'].'>Delete</a> </td>'                      
                        
                   . '</tr>';
            } 
           
         echo '</table>';
            echo '<br>';
           
            echo '<div class="perfect">';
            echo '<a href = "doctorsignup.php" class = "btn btn-success btn-lg "  > Add New Doctor</a>';
            echo '<br>';
               echo '<br>';
            echo '<a href = "logout.php" class = "btn btn-danger "  > LOGOUT</a>';
             echo '</div>';
        ?>
     
    </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $("._deleteClick").click(function(){
            $id = $(this).attr("data-id");
            var result = confirm("Want to delete?");
            if (result) {
               window.location="?delete="+$id;
            }
});
//        function deletecheck(var id){
//            alert(id);
//            
//        }
    </script>
</html>
