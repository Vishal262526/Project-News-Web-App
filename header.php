<?php

include "config.php";

$page = basename($_SERVER['PHP_SELF']);
switch ($page) {
    case "index.php":
        $page_title = "Home";
        break;

    case "category.php":
        if (isset($_GET['id'])) {
            $sql_title = "SELECT category_name FROM category WHERE category_id = {$_GET['id']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Query Faild");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['category_name'];
            
        } else {
            $page_title = "No Post Found";
        }
        break;

    case "author.php":
        if (isset($_GET['user-id'])) {
            $sql_title = "SELECT username FROM user WHERE user_id = {$_GET['user-id']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Query Faild");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['username'];
            
        } else {
            $page_title = "No Post Found";
        }
        break;

    case "single.php":
        if (isset($_GET['id'])) {
            $sql_title = "SELECT title FROM post WHERE post_id = {$_GET['id']}";
            $result_title = mysqli_query($conn, $sql_title) or die("Query Faild");
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['title'];
            
        } else {
            $page_title = "No Post Found";
        }
        break;
        
    case "search.php":
        if (isset($_GET['search'])) {
            
            $page_title = $_GET['search'];
            
        } else {
            $page_title = "No Search Result Found";
        }
        
        break;

    default:
        echo "News Site";
}

$sql = "SELECT * FROM settings";
$result = mysqli_query($conn, $sql) or die("Query Faild");

if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class=" col-md-offset-4 col-md-4">
                    <a href="index.php" id="logo"><img src="admin/images/<?php echo $row['logo']; ?>"></a>
                </div>
                <!-- /LOGO -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <?php

                include "config.php";

                if (isset($_GET['id'])) {
                    $cat_id = $_GET['id'];
                }
                else{
                    $cat_id = "";
                }


                $sql = "SELECT * FROM category WHERE post > 0";
                $result = mysqli_query($conn, $sql) or die("Query Faild");
                ?>
                <div class="col-md-12">
                    <ul class='menu'>

                        <li><a href="index.php">Home</a></li>
                        <?php

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['category_id'] == $cat_id) {
                        ?>
                                    <li><a class="active" href='category.php?id=<?php echo $row['category_id']; ?>&cat-name=<?php echo $row['category_name'] ?>'><?php echo $row['category_name']; ?></a></li>
                                <?php
                                    continue;
                                }

                                ?>
                                <li><a href='category.php?id=<?php echo $row['category_id']; ?>'><?php echo $row['category_name']; ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->