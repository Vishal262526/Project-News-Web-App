<?php

include "config.php";

if(isset($_GET['id'])){
    $category_id = $_GET['id'];

    $sql = "DELETE FROM category WHERE category_id = '$category_id'";
    $result = mysqli_query($conn, $sql) or die("Query Faild");

    header("location: category.php");
}
?>