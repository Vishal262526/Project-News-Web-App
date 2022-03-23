<?php
include "header.php";


if ($_SESSION['role'] == 0) {
    header("location: post.php");
}

include "config.php";



$limit = 3;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit;


// Admin Pagination

// Admin Pagination End

$sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT $offset, $limit ";
$result = mysqli_query($conn, $sql) or die("Query Error");

?>



<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Users</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-user.php">add user</a>
            </div>

            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php if (!is_null($result)) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td class='id'><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php if ($row['role'] == 1) {
                                            echo "Admin";
                                        } else {
                                            echo "Normal";
                                        }
                                        ?></td>
                                    <td class='edit'><a href='update-user.php?id=<?php echo $row['user_id'] ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-user.php?id=<?php echo $row['user_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
                                </tr>

                    </tbody>
            <?php }
                        } ?>
                </table>

                <?php
                $sql_1 = "SELECT * FROM user";
                $result_1 = mysqli_query($conn, $sql_1) or die("Query Faild");

                if (mysqli_num_rows($result_1) > 0) {
                    $rows = mysqli_num_rows($result_1);

                    $Total_pages = ceil($rows / $limit);

                ?>
                    <ul class="pagination admin-pagination">
                        <?php

                        if ($page > 1) {
                        ?>
                            <li><a href="users.php?page=<?php echo ($page - 1); ?>">Prev</a></li>
                        <?php
                        } ?>


                        <?php
                        for ($i = 1; $i <= $Total_pages; $i++) {
                            if ($i == $page) {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                        ?>

                            <li class="<?php echo $active ?>"><a href="users.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php
                        } ?>
                        <?php
                        if ($Total_pages > $page) {
                        ?>
                            <li><a href="users.php?page=<?php echo ($page + 1); ?>">Next</a></li>
                        <?php
                        } ?>
                    </ul>
                <?php
                } ?>

                <!-- <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>