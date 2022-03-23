<?php

include("config.php");
include 'header.php';

if (isset($_GET['id'])) {
    $auth_id = $_GET['id'];
}


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$limit = 3;
$offset = ($page - 1) * $limit;

$sql1 = "SELECT username FROM user WHERE user_id = '$auth_id'";
$result1 = mysqli_query($conn, $sql1) or die("Query Error");

$row1 = mysqli_fetch_assoc($result1);

?>





<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">

                    <h2 class="page-heading"><?php echo $row1['username']; ?></h2>
                    <?php
                    

                    $sql = "SELECT post.post_id, post.title,post.category,post.description,post.post_img,post.author, category.category_name, post.post_date, user.username  FROM post
                            LEFT JOIN category ON post.category = category.category_id
                            LEFT JOIN user ON post.author = user.user_id
                            WHERE post.author = '$auth_id'
                            ORDER BY post_id DESC LIMIT $offset,$limit";
                    $result = mysqli_query($conn, $sql) or die("Query Error");

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="post-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img c src="admin/upload/<?php echo $row['post_img']; ?>" alt="" /></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="inner-content clearfix">
                                            <h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3>
                                            <div class="post-information">
                                                <span>
                                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                                    <a href='category.php?id=<?php echo $row['category'] ?>'><?php echo $row['category_name']; ?></a>
                                                </span>
                                                <span>
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                    <a href='author.php?id=<?php echo $row['author']; ?>'><?php echo $row['username']; ?></a>
                                                </span>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <?php echo $row['post_date']; ?>
                                                </span>
                                            </div>
                                            <p class="description">
                                                <?php echo substr($row['description'], 0, 130); ?>
                                            </p>
                                            <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php

                    $sql_1 = "SELECT * FROM post WHERE author = '$auth_id'";
                    $result_1 = mysqli_query($conn, $sql_1) or die("Query Faild");

                    if (mysqli_num_rows($result_1) > 0) {
                        $rows = mysqli_num_rows($result_1);

                        $Total_pages = ceil($rows / $limit);
                    }
                    ?>
                    <ul class="pagination admin-pagination">

                        <?php

                        if ($page > 1) {
                        ?>
                            <li><a href="author.php?page=<?php echo ($page - 1); ?>&id=<?php echo $auth_id; ?>">Prev</a></li>
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

                            <li class="<?php echo $active ?>"><a href="author.php?page=<?php echo $i; ?>&id=<?php echo $auth_id; ?>"><?php echo $i; ?></a></li>

                        <?php
                        } ?>
                        <?php
                        
                        if ($Total_pages > $page) {
                        ?>
                            <li><a href="author.php?page=<?php echo ($page + 1); ?>&id=<?php echo $auth_id; ?>">Next</a></li>
                        <?php
                        } ?>
                    </ul>

                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>