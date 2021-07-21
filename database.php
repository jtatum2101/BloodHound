<?php
// used to connect to the database
$host = "localhost";
$db_name = "bloodhound";
$username = "root";
$password = "";

$con = new mysqli("localhost", "root", "", "bloodhound");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>