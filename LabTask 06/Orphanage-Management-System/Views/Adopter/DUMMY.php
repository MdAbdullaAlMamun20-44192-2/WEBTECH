<?php 

session_start();
    if(!isset($_SESSION["loginUser_Name"])){
        header('Location:Login.php');
    }
echo "Welcome to the PHP";




?>