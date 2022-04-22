<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>

Congratulation! You have logged into password protected page. <a href="registration.php">Click here</a> to Logout.