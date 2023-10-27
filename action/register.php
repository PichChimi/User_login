<?php
include('../layout/database.php');
session_start();
if(isset($_POST['signup'])){
    $phone = $_POST['number'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != '' && $confirm != ''){
        $sql = "INSERT INTO `register`(`number`, `password`, `confirm`) VALUE ('$phone', '$password', '$confirm')";
        $db->query($sql);
        $_SESSION['success'] = 'Register successfully.';
        header('location: ../login.php');

    }else{
        $_SESSION['error'] = 'Wrong password!';
        header('location: ../login.php');
    }


    
}else{
    $_SESSION['error'] = 'Please, requirt value!';
    header('location: ../login.php');
}


?>