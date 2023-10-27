<?php
session_start();
$project = "\/login_sigup/";
function baseUrl($Uri){
  global $project;
  if(!isset($_SERVER['HTTPS'])){
    echo 'http://'.$_SERVER['HTTP_HOST'].$project.$Uri;
  }else{
    echo 'https://'.$_SERVER['HTTP_HOST'].$project.$Uri;
  }
}

function location($docment){
  global $project;
  return $_SERVER['DOCUMENT_ROOT'].$project.$docment;
}

?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>
       

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

         <!-- -- Bootstrapt -- -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
               
    </head>