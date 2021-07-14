<?php

include_once 'header.php';
include 'config.php';

include 'database.php';



$email = $_POST['email'];
$psw = $_POST['psw'];
$query = "SELECT email FROM users WHERE email='$email' AND psw='$psw'";
$stmt = $con -> prepare($query);
$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) > 0){

    while ($row = mysqli_fetch_array($result)){
        $psw = $row['psw'];
        $email = $row['email'];
        session_start();
        $_SESSION['psw'] = $psw;
        $_SESSION['email'] = $email;
    }
    header("Location: dashboard.php");

} else{
    echo 'Invalid password or email';
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound | Log In!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <section class="box">
            <h1 style="font-size: 60px;">Log In:</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"
                style="max-width:500px;margin:auto">
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="text" placeholder="Email" name="email" />
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="psw" />
                </div>
                <button type="submit" value="Login" class="btn">Log In</button>
            </form>

                <br>
                <br>
        </section>
    </div>
</body>

</html>