<?php include "header.php";
include "config.php";
session_start();
if ($_SESSION['role'] == 0) {
    header("location: post.php");
}

if (isset($_GET['id'])){
    $cat_id = $_GET['id'];

    $sql = "SELECT category_name FROM category WHERE category_id = '$cat_id'";
    $result = mysqli_query($conn, $sql) or die("Query Faild");

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['sumbit'])){
    $category_name = $_POST['cat_name'];

    $sql_1 = "UPDATE category SET category_name = '$category_name' WHERE category_id = $cat_id";
    $result_1 = mysqli_query($conn, $sql_1) or die("Query Faild");

    header("location: category.php");
    
}

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']  ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
