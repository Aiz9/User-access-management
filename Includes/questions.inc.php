<?php 
require_once '../database/dbconnection.php';

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
        
    addQuestion($conn, $firstname, $lastname, $mail, $message);
}

function addQuestion($conn, $firstname, $lastname, $mail, $message){

    $sql = "insert into questions(firstname, lastname, mail, message) 
    values (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt){
        header("location:../contact.php?error=queryError2");
        exit();
    }
    $stmt->bind_param("ssss",$firstname, $lastname, $mail, $message);
    $stmt->execute();
    $stmt->close();
    header("Location:../contact.php?Questionasked=success");
    exit();
    }

?>