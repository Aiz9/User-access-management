<!DOCTYPE html>
<?php 
require_once '../database/dbconnection.php';
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla</title>
    <link rel="icon" href="../assets/images/Tesla_T_symbol.svg.png" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
<header class="header">
        <nav class="navbar">
            <a href="index.php" class="nav-logo"><img src="../assets/images/logo.png" alt="logo" width="90"/></a>
            <div class="menu">
            <ul class="nav-menu">
                <li class="nav-item">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Dashboard</a>
                </li>
                <?php
                    if(isset($_SESSION['userid'])){
                        echo "<li class='nav-item'><a class='nav-link' href='../includes/logout.inc.php'>Logout</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='profile.php'>".$_SESSION['username']."</a></li>";
                    }
                    else{
                        echo "<li class='nav-item'><a class='nav-link' href='../login.php'>Login</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='../signup.php'>Register</a></li>";
                    } 
                    ?>
            </ul>
            </div>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>
<script src="../assets/Javascript/Menu.js"></script>


    
