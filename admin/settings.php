<?php

include "config.php";

$sql = "SELECT * FROM settings";
$result = mysqli_query($conn, $sql) or die("Query Faild");

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}

?>




<?php include "header.php";?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="save-setting.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label>Website Name</label>
                        <input type="text" name="website_name" class="form-control" value="<?php echo $row['website_name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Select Image</label>
                        <input type="file" name="logo" class="form-control">
                        <img src="images/<?php echo $row['logo'] ?>" alt="">
                        <input type="hidden" name="old-logo" value="<?php echo $row['logo'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Footer Description</label> 
                        <textarea class="form-control" name="website_footer"rows="10"><?php echo $row['website_footer']; ?></textarea>
                    </div>
                   
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>

