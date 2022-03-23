<?php
session_start();

if ($_SESSION['role'] == 0){
    header("location: post.php");
}

    include "config.php";


    $user_id = $_GET['id'];

    $sql = "DELETE FROM user WHERE user_id = '$user_id'";

    if(mysqli_query($conn, $sql)){
        header("location: users.php");
    }
    else{
        echo "can't Delte Due to some reason please contact website admintrator";
    }

    mysqli_close($conn);

?>