<?php
require_once 'database/dbconnection.php'; 
include_once 'navbar.php';
require 'includes/login.check.user.php';
require 'includes/login.user.php';

$sql = 'select * from posts';
$stmt=$conn->prepare($sql);
if(!$stmt){
    header('location:index.php?error=queryerror');
    exit();
}
$stmt->execute();
$result= $stmt->get_result();
$stmt->close();
?>
<main>
<section>
    <div class="main-content">
        <h1 style="text-align: center;">Posts</h1>
        <div class="post-parent">
            <?php while($row=$result->fetch_assoc()){
                ?>
                <div class="post">
                    <div class="post-title">
                        <h3><?php echo $row['headline'] ?></h3>
                    </div>
                    <div class="post-content">
                        <p><?php echo $row['description'] ?></p>
                    </div>
                    <div class="post-image">
                        <img src="assets/uploads/<?php echo $row['post_image'] ?>" />
                    </div>
                    <div class="icons">
                        <i class="fas fa-heart fa-2x"></i>
                        <i class="fas fa-comment fa-2x"></i>
                        <i class="fas fa-share fa-2x"></i>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>
</main>
<?php
include_once('footer.php');
?>