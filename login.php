<?php
session_start();
include 'config.php';
if($_POST){
try {
    $psw = $_POST['psw'];
    $email = $_POST['email'];
    // prepare sql and bind parameters
    $query = "SELECT * FROM users WHERE email = :email AND psw = :psw";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':psw', $psw);
    $stmt->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $psw = $row['psw'];
        $email = $row['email'];
        $role = $row['role'];
        $full_name = $row['full_name'];
        
        $_SESSION['psw'] = $psw;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
        $_SESSION['full_name'] = $full_name;
    }
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){
            header("Location: dashboard-admin.php");
        }else if($_SESSION['role'] == 'officer'){
            header("Location: dashboard.php");
        }else{
            header("Location: register.php");
        }
    }
}


    
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
  }
  $con = null;
}

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound | Log In!</title>
    <link rel="icon" type= "image/x-icon" href="img/bloodhound.ico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
    <style>
    body {
        color: #999;
        background: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }

    .form-control,
    .form-control:focus,
    .input-group-addon {
        border-color: #e1e1e1;
        border-radius: 0;
        background: #F8F5F2;
    }

    .signup-form {
        width: 390px;
        margin: 0 auto;
        padding: 30px 0;
    }

    .signup-form h2 {
        color: #636363;
        margin: 0 0 15px;
        text-align: center;
    }

    .signup-form .lead {
        font-size: 14px;
        margin-bottom: 30px;
        text-align: center;
    }

    .signup-form form {
        border-radius: 1px;
        margin-bottom: 15px;
        background: #F8F5F2;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .signup-form .form-group {
        margin-bottom: 20px;
    }

    .signup-form label {
        font-weight: normal;
        font-size: 13px;
    }

    .signup-form .form-control {
        min-height: 38px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
    }

    .signup-form .input-group-addon {
        max-width: 42px;
        text-align: center;
        background: none;
        border-bottom: 1px solid #e1e1e1;
        padding-left: 5px;
    }

    .signup-form .btn,
    .signup-form .btn:active {
        font-size: 16px;
        color: #DF1F2D;
        font-weight: bold;
        background: #060606 !important;
        border-radius: 3px;
        border: none;
        min-width: 140px;
    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #DF1F2D !important;
        color: #060606;
    }

    .signup-form a {
        color: #F8F5F2;
        text-decoration: none;
    }

    .signup-form a:hover {
        text-decoration: underline;
    }

    .signup-form .fa {
        font-size: 21px;
        position: relative;
        top: 8px;
    }

    .signup-form .fa-paper-plane {
        font-size: 17px;
    }

    .signup-form .fa-check {
        color: #fff;
        left: 9px;
        top: 18px;
        font-size: 7px;
        position: absolute;
    }

    .register {
        background-image: url("img/login.png");
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
    }

    span {
        background: #F8F5F2;
    }

    input {
        background: #F8F5F2;
    }
    </style>
</head>

<body class="register">
    <?php
        include 'navbar.php';


    ?>
    <div class="signup-form">
        <form method="post">
            <h2>Log In</h2>
            <p class="lead">Log In for the full access to the website!</p>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Email Address"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" class="form-control" name="psw" placeholder="Password" required="required">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" value="Log In" class="btn btn-block btn-lg" style="background-color: #060606;">Log
                    In</button>
            </div>

        </form>
    </div>
    </div>

</body>

</html>