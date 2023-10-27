<?php
include('../layout/database.php');
session_start();
if(isset($_POST['login'])){
    $number = $_POST['number'];
    $password = $_POST['password'];
    if($number != '' && $password != ''){
        $sql = "SELECT * FROM register WHERE number = '$number' AND password = '$password'";
        $result = $db->query($sql);
    if($result->num_rows == 1){
        $_SESSION['login'] = 1;
        $_SESSION['success'] = 'login successfully.';
        header('location: ../index.php');
    }

    }else{
        $_SESSION['error'] = 'Please, requirt value!';
        header('location: ../login.php');
    }

}else{
    $_SESSION['error'] = 'Please, requirt value!';
    header('location: ../login.php');
}

?>