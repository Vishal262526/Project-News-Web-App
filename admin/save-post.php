<?php
session_start();
include "config.php";

if(isset($_FILES['fileToUpload'])){
    $error = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = strtolower(end(explode(".",$file_name)));
    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions) === false){
        $error[] = "This Extension file are not allowed, Please chose JPG or PNG image";
    }

    if($file_size > 2097152){
        $error[] = "File size must be 2MB or lower";
    }

    $new_file_name =  time() . "-" . $file_name;
    $img_name = $new_file_name;
    

    if(empty($error) == true){
        move_uploaded_file($file_tmp_name,"upload/".$img_name);
    }

    else{
        print_r($error);
        die();
    }
}

$title = mysqli_real_escape_string($conn, $_POST['post-title']);
$description = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M, Y");
$author = $_SESSION['user_id'];

$sql = "INSERT INTO post (title,description, category, post_date, author, post_img)
 VALUES ('$title', '$description', '$category', '$date', '$author','$img_name');";

$sql .= "UPDATE category SET post = post + 1 WHERE category_id = '$category'";

if(mysqli_multi_query($conn, $sql)){
    header("location: post.php");
}

else{
    echo "<div class='alert alert-danger'>Query Faild 123</div>";
    die();
}
