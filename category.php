<?php include 'header.php'; ?>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                    <?php

                    include "config.php";


                    $limit = 3;
                    if(isset($_GET['id'])){
                        $cat_id = $_GET['id'];
                    }

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }

                    $offset = ($page - 1) * $limit;
                    // $page

                    // Admin Pagination End


                    $sql = "SELECT post.post_id, post.title,post.category,post.description,post.author,post.post_img, category.category_name, post.post_date, user.username  FROM post
                            LEFT JOIN category ON post.category = category.category_id
                            LEFT JOIN user ON post.author = user.user_id
                            WHERE post.category = {$_GET['id']}
                            ORDER BY post_id DESC LIMIT $offset, $limit";

                    $result = mysqli_query($conn, $sql) or die("Query Error");

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <h2 class="page-heading"><?php echo $row['category_name']; ?></h2>
                            <div class="post-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img src="admin/upload/<?php echo $row['post_img'] ?>" alt="" /></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="inner-content clearfix">
                                            <h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3>
                                            <div class="post-information">
                                                <span>
                                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                                    <a href='category.php?id=<?php echo $row['category']; ?>'><?php echo $row['category_name']; ?></a>
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
                                                <?php echo substr($row['description'], 0, 100); ?>
                                            </p>
                                            <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }else{
                        ?>
                        <h3>There are no news for this category</h3>
                        <?php
                    }
                    ?>
                    <ul class='pagination'>
                        <?php

                        $sql_1 = "SELECT post.post_id, post.title,post.category,post.description,post.post_img, category.category_name, post.post_date, user.username  FROM post
                                    LEFT JOIN category ON post.category = category.category_id
                                    LEFT JOIN user ON post.author = user.user_id
                                    WHERE category.category_id = {$_GET['id']}";
                        $result_1 = mysqli_query($conn, $sql_1) or die("Query Faild");

                        if (mysqli_num_rows($result) > 0) {
                            $row1 = mysqli_num_rows($result_1);

                            $total_pages = ceil($row1 / $limit);
                        }
                        ?>

                        <?php
                        if ($page > 1) {
                        ?>
                            <li><a href="category.php?page=<?php echo $page - 1; ?>&id=<?php echo $cat_id ?>">Prev</a></li>
                        <?php
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                        ?>
                            <li><a href="category.php?page=<?php echo $i; ?>&id=<?php echo $cat_id ?>"><?php echo $i; ?></a></li>
                        <?php
                        }
                        if ($total_pages > $page) {
                        ?>
                            <li><a href="category.php?page=<?php echo $page + 1; ?>&id=<?php echo $cat_id ?>">Next</a></li>

                        <?php
                        }
                        ?>
                        <!-- <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li> -->
                    </ul>
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>