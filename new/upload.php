<?php

if($_FILES['image']){
    $file_name = $_FILES['image']['name'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp_name, "upload/" . $file_name);
    echo "File Successfully Uploaded";
    echo $file_name;
    echo $file_tmp_name;

}


?>