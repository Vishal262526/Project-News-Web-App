<?php
include "config.php";



if (empty($_FILES['new-image']['name'])) {
    $file_name = $_POST['old-image'];
} else {

    $error = array();

    $file_name = $_FILES['new-image']['name'];
    $file_size = $_FILES['new-image']['size'];
    $file_tmp_name = $_FILES['new-image']['tmp_name'];
    $file_type = $_FILES['new-image']['type'];
    $file_ext = strtolower(end(explode(".", $file_name)));
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $error[] = "This Extension file are not allowed, Please chose JPG or PNG image";
    }

    if ($file_size > 2097152) {
        $error[] = "File size must be 2MB or lower";
    }
    $new_file_name =  time() . "-" . $file_name;
    $img_name = $new_file_name;


    if (empty($error) == true) {
        move_uploaded_file($file_tmp_name, "upload/" . $img_name);
    } else {
        print_r($error);
        die();
    }
}

if (isset($_POST['old_category'])) {
    $old_category = ($_POST['old_category']);
}



// $title = $_POST['']
$sql =  "UPDATE post SET title='{$_POST["post_title"]}',description='{$_POST["postdesc"]}',category={$_POST["category"]}, post_img='$img_name' WHERE post_id = '{$_POST["post_id"]}';";
if ($old_category != $_POST['category']) {
    $sql .= "UPDATE category SET post = post - 1 WHERE category_id = '$old_category';";
    $sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$_POST['category']};";
}
$result = mysqli_multi_query($conn, $sql) or die("Query Faild");



if ($result) {
    header("location: post.php");
} else {
    echo "Query Faild";
}
