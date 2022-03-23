<?php 

include 'config.php';

$sql = "SELECT website_footer FROM settings";
$result = mysqli_query($conn, $sql) or die("Query Faild");

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
}


?>
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span><?php echo $row['website_footer']  ?></a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
