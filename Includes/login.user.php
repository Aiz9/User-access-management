<?php
if(isset($_SESSION['is_superuser'])){
    if($_SESSION['is_superuser']==1){
        header('location:admin/index.php');
        exit();
    }
}