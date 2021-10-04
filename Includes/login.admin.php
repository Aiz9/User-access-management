<?php
if(isset($_SESSION['is_superuser'])){
    if($_SESSION['is_superuser']==0){
        header('location:../index.php');
    }
}