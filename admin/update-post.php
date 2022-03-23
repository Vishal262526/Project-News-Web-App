<?php
include "header.php";
include "config.php";


?>


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Post</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">

                <?php

                if (isset($_GET['id'])) {
                    $post_id = $_GET['id'];

                    $sql = "SELECT * FROM post WHERE post_id = '$post_id'";
                    $result = mysqli_query($conn, $sql) or die("Query Faild");

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }


                    if ($_SESSION['role'] == 0) {

                        if ($row['author'] != $_SESSION['user_id']) {
                            header("location: post.php");
                        }
                    }
                }
                ?>


                <!-- Form for show edit-->
                <form action="save-update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="post_id" class="form-control" value="<?php echo $row['post_id'] ?>" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTile">Title</label>
                        <input type="text" name="post_title" class="form-control" id="exampleInputUsername" value="<?php echo $row['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea name="postdesc" class="form-control" required rows="5"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCategory">Category</label>
                        <select class="form-control" name="category">
                            <?php
                            $sql_1 = "SELECT * FROM category";
                            $result_1 = mysqli_query($conn, $sql_1) or die("Query Faild");

                            if (mysqli_num_rows($result_1) > 0) {
                                while ($row_1 = mysqli_fetch_assoc($result_1)) {
                                    if ($row_1['category_id'] == $row['category']) {
                            ?>
                                        <option selected value="<?php echo $row_1['category_id']; ?>"><?php echo $row_1['category_name'];  ?></option>

                                    <?php
                                        continue;
                                    }
                                    ?>
                                    <option value="<?php echo $row_1['category_id']; ?>"><?php echo $row_1['category_name'];  ?></option>

                            <?php
                                }
                            }
                            ?>
                            <!-- <option value="">Css</option>
                            <option value="">javascript</option>
                            <option value="">Python</option> -->
                        </select>
                        <input type="hidden" name="old_category" value="<?php echo $row['category']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Post image</label>
                        <input type="file" name="new-image">
                        <img src="upload/<?php echo $row['post_img']; ?>" height="150px">
                        <input value="<?php echo $row['post_img']; ?>" type="hidden" name="old-image">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                </form>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>