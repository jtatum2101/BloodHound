<?php
// Local connection
// $host = "localhost";
// $db_name = "bloodhound";
// $username = "root";
// $password = "";

// Remote Connection to database

$host = "remotemysql.com";
$db_name = "jAHhcM6Ah5";
$username ="jAHhcM6Ah5";
$password = "wfUku9gowM";
$charset = "utf8";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name};charset={$charset}" $username, $password);
}
 
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
 
?>




