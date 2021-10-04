<?php
require '../database/dbconnection.php';

if(isset($_POST['submit'])){
    $username = $_POST['username1'];
    $password = $_POST['password1'];

    if(emptyInputs($username, $password)==true){
        header("location:../login.php?error=emptyInputs");
        exit();
    }
    loginUser($conn, $username, $password);
}

function emptyInputs($username, $password){
    $result = "";
    if(empty($username) || empty($password)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function userExists($conn, $username){
    $result="";
    $sql = "select * from users where username=? or email=? ";
    $stmt = $conn->prepare($sql);
    if(!$stmt){
        header("location:../login.php?error=queryError");
        exit();
    }
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row;
    $stmt->close();
}

function loginUser($conn, $username, $password){
    $userFound = userExists($conn,$username);
    if(!$userFound){
        header("location:../login.php?error=userdoesnotexist");
        exit();
    }
    $getPassword = $userFound['user_password'];
    $verifyPassword = password_verify($password, $getPassword);

    if($verifyPassword==false){
        header("location:../login.php?error=incorrectpassword");
        exit();
    }
    elseif($verifyPassword==true){
        if ($userFound['is_active']==0){
            header("location:../login.php?error=inactiveaccount");
            exit();
        }
        else{
            session_start();
            $_SESSION['userid']=$userFound['id'];
            $_SESSION['username']=$userFound['username'];
            $_SESSION['is_superuser']=$userFound['is_superuser'];
            
            if($userFound['is_superuser']==0){
                header("location:../index.php?login=success");
                exit();
            }
            elseif($userFound['is_superuser']==1){
                header("location:../admin/index.php?login=adminlogin");
                exit();
            }
        }
        
       
    }
}