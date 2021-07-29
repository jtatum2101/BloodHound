<?php
// used to connect to the database
$host = "@us-cdbr-east-04.cleardb.com";
$db_name = "heroku_e3877ac9a5772b";
$username = "be88563e567f47";
$password = "9d62f99f";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
 
?>


