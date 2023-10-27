<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'user_login');

$db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if($db->connect_errno){
    echo 'error';
}
?>