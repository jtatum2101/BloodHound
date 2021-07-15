<?php

include_once'header.php';
session_start();

if($_POST){
    include'database.php';
    include 'config.php';
    if($validLoginCredentials){
        $_SESSION['user'] = array(
            'email' => $email,
            'login' => 'login',
            'psw' => $psw,
        );
    }   
}
if(isset($_SESSION['email'])){
        echo 'you are logged in successfully, ' .  $_SESSION['email'];
    } else{
        echo 'Logged in was not completed! Try again.';
    }

?>