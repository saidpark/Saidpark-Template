<?php
ob_start();
session_start();
//mysql info
$host = "localhost";         //mysql host
$user_name = "root";             //mysql username
$password = "";              //mysql password
$database_name = "your-database";         //mysql database name
$_login_file = "./index.php";  //login page
$redirect_url = "./main.php";  //main page;where it is redirected after login
?>


