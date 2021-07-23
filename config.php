<?php
$mysqli = mysqli_connect("localhost", "root", "", "bloodhound");

/* check connection */
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* close connection */
mysqli_close($mysqli);
?> 


