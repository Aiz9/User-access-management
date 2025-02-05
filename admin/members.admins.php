<?php
include 'header.php';
include '../database/dbconnection.php';
require 'data.php';
require '../includes/login.check.admin.php';
require '../includes/login.admin.php';
$all_admins = allAdmins($conn)
?>

<div class="main-content">
    <h1 style="text-align:center">All Admins</h1>
    <a href="members.admin.add.php" class="btn-table-top">Add New Admin</a>
    <div class="data">
        <table>
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Joined Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $all_admins->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['middlename'] ?></td>
                            <td><?php echo $row['lastname'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td></td>
                            <td><?php echo $row['joined_date'] ?></td>
                            <td>
                                <a href="demote.php?userid=<?php echo $row['id'] ?>" class="edit" onClick="javascript:return confirm('Are you sure?')">Demote</a>
                                <a href="deactivate.php?userid=<?php echo $row['id'] ?>" class="deactivate" onClick="javascript:return confirm('Are you sure?')">Deactivate</a>
                                <a href="delete.php?userid=<?php echo $row['id'] ?>" class="delete" onClick="javascript:return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
