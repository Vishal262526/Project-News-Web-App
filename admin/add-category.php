<?php

include("header.php");
include("config.php");


if(isset($_POST['save'])){
    $cat_name = $_POST['cat_name'];

    $sql = "INSERT INTO category (category_name, post) VALUES ('$cat_name', 0)";
    $result = mysqli_query($conn, $sql) or die("Query Error");

    header("location: category.php");

}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cat_name" class="form-control" placeholder="Enter New Category" required>
                    </div>
                    
                    <input type="submit" name="save" class="btn btn-primary" value="Add Category" required />
                </form>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>



