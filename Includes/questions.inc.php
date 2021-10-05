<?php 
require_once '../database/dbconnection.php';

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $subject=$_POST['subject'];
    $message = $_POST['message'];
        
    addQuestion($conn, $firstname, $lastname, $mail,$subject, $message);
}

function addQuestion($conn, $firstname, $lastname, $mail, $subject, $message){

    $sql = "insert into questions(firstname, lastname, mail, subject, message) 
    values (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt){
        header("location:../contact.php?error=queryError2");
        exit();
    }
    $stmt->bind_param("ssss",$firstname, $lastname, $mail, $subject, $message);
    $stmt->execute();
    $stmt->close();
    header("Location:../contact.php?Questionasked=success");
    exit();
    }

?>