<?php
require_once '../database/dbconnection.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c-password'];
    $is_superuser = $_POST['is_superuser'];

    if(emptyInputs($firstname, $lastname, $username, $email, $password, $c_password)==true){
        header("Location:members.admin.add.php?error=emptyInputs");
        exit();
    }
    if(invalidUsername($username)==true){
        header("Location:members.admin.add.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email)==true){
        header("Location:members.admin.add.php?error=invalidEmail");
        exit();
    }
    if(passwordLevel($password)==true){
        header("Location:members.admin.add.php?error=passwordLevel");
        exit();
    }
    if(passwordMatch($password, $c_password)==true){
        header("Location:members.admin.add.php?error=passwordMatch");
        exit();
    }
    if(userTaken($conn,$username, $email )==true){
        header("Location:members.admin.add.php?error=userTaken");
        exit();
    }
    createUser($conn, $firstname, $middlename, $lastname, $email, $username, $password, $is_superuser);

}
else{
    header("Location:members.admin.add.php.php");
    exit();
}

function emptyInputs($firstname, $lastname, $username,$email, $password, $c_password){
    $result = "";
    if(empty($firstname) || empty($lastname) || empty($username) || 
    empty($email) ||empty($password) || empty($c_password)){
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUsername($username){
    $result = "";
    if(!preg_match("/^[0-9a-zA-Z]+$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result = "";
    if(!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,5})$/", $email)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail2($email){
    $result = "";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}


function passwordLevel($password){
    $result = "";
    if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/", $password)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function passwordMatch($password, $c_password){
    $result="";
    if($password!==$c_password){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function userTaken($conn, $username, $email){
    $result="";
    $sql = "select * from users where username=? or email=? ";
    $stmt = $conn->prepare($sql);
    if(!$stmt){
        header("location:members.admin.add.php?error=queryError");
        exit();
    }
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if($row){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
    $stmt->close();
}



function createUser($conn, $firstname, $middlename, $lastname, $email, $username, $password, $is_superuser){
    $sql = "insert into users(firstname, middlename, lastname, email, username, user_password, is_superuser) 
    values (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt){
        header("location:members.admin.add.php?error=queryError2");
        exit();
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("ssssssi",$firstname, $middlename, $lastname, $email, $username, $hashed_password,$is_superuser);
    $stmt->execute();
    $stmt->close();
    header("Location:members.admins.php?signup=success");
    exit();
}




