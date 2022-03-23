<?php
include "config.php";

if (empty($_FILES['logo']['name'])) {
    $file_name = $_POST['old-logo'];
} else {

    $error = array();

    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp_name = $_FILES['logo']['tmp_name'];
    $file_type = $_FILES['logo']['type'];
    $file_ext = strtolower(end(explode(".", $file_name)));
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $error[] = "This Extension file are not allowed, Please chose JPG or PNG image";
    }

    if ($file_size > 2097152) {
        $error[] = "File size must be 2MB or lower";
    }

    if (empty($error) == true) {
        move_uploaded_file($file_tmp_name, "images/" . $file_name);
    } else {
        print_r($error);
        die();
    }
}



// $title = $_POST['']
$sql = "UPDATE settings SET website_name = '{$_POST["website_name"]}', logo = '{$file_name}', website_footer = '{$_POST["website_footer"]}'";

$result = mysqli_query($conn, $sql) or die("Query Faild");

if($result){
    header("location: post.php");
}
else{
    echo "Query Faild";
}
