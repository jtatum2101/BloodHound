<?php

include_once'header.php';
session_start();

if($_POST){
    include'database.php';
    include 'config.php';
    $role = $row['role'];
    if($validLoginCredentials){
        $_SESSION['user'] = array(
            'email' => $email,
            'login' => 'login',
            'psw' => $psw,
        );
    }   
}
if (isset($_SESSION['role'])){
    echo 'This is your role for this website: ' . $_SESSION['role'];
}else{
    echo 'Did not grab the role of the user, man! Sorry!';
}
if(isset($_SESSION['email'])){
        echo 'you are logged in successfully, ' .  $_SESSION['email'];
    } else{
        echo 'Logged in was not completed! Try again.';
    }

    function getUserRole($email)
    {
        if ($this->databaseConnection()) {
            $query_user = $this->db_connection->prepare('SELECT role FROM users WHERE email = :email');
            $query_user->bindValue(':email', $email, PDO::PARAM_STR);
            $query_user->execute();
    
            return $query_user->fetchObject();
        } else {
            return false;
        }
    }

?>