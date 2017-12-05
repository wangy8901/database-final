<?php

$target_dir = "uploads/";

$target_file = $target_dir . '.jpg';

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
    
    echo "file uploaded";
}
        else {
    echo "Sorry";
        }
        
        ?>