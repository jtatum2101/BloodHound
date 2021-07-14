<?php

include_once 'header.php';
include 'config.php';

include 'database.php';

$email = $_POST['email'];
$psw = $_POST['psw'];
$query = "SELECT * FROM users WHERE email='$email' AND psw='$psw'";
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
<html>

    <head>
        <title>BloodHound | Log In!</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form text-center">
                <form method="post">
                    <div class="form-group text-center">
                        <label>Email</label>
                        <input type="text" class="form-control text-center" style="text-align: center; margin-left: 300px;"
                            placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="psw"
                            style="text-align: center; margin-left: 300px;">
                    </div>
                    <button type="submit" value="Login" class="btn btn-black"
                        style="text-align: center; margin-left: 600px;">Login</button>
                </form>
            </div>
        </div>
    </div>


</html>