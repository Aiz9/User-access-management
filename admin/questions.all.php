<?php
include 'header.php';
include '../database/dbconnection.php';
require 'data.php';
require '../includes/login.check.admin.php';
require '../includes/login.admin.php';
$all_members = allQuestions($conn);

$sql = 'select * from questions';
$stmt=$conn->prepare($sql);
if(!$stmt){
    header("location:index.php?error=queryError");
    exit();
}
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>

<div class="main-content">
    <h1 style="text-align:center">All Questions</h1>
    <div class="data">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['mail'] ?></td>
                            <td><?php echo $row['subject'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                
                            <td>
                                <a href="post.delete.php?postid=<?php echo $row['id'] ?>" class="delete" onClick="javascript:return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>