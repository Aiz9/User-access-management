<?php
$dbHost = "localhost:3307";
$dbUsername = "root";
$dbPassword ='Root';
$dbName = 'login_system_29e';

$conn =mysqli_connect($dbHost, $dbUsername,$dbPassword, $dbName);

if(!$conn){
    die("Database Connection Error: ".mysqli_connect_error());
}

// create table users(
//     id INT not null PRIMARY key AUTO_INCREMENT,
//     firstname varchar(50) not null,
//     middlename varchar(50),
//     lastname varchar(50) not null,
//     username varchar(100) not null,
//     email varchar(100) not null,
//     user_password varchar(100) not null,
//     profile_image varchar(255),
//     is_superuser boolean default 0,
//     is_active boolean default 1,
//     joined_date timestamp default CURRENT_TIMESTAMP
//     );
    

