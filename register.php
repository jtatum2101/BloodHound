<?php
include_once 'header.php';
?>
<?php
if($_POST){
 
    // include database connection
    include 'config.php';
 
    try{
 
        // insert query
        $query = "INSERT INTO users (full_name, email, psw, role, police_id, admin_id, date_joined) VALUES (:full_name, :email, :psw, :role, :police_id, :admin_id, :date_joined)";
 
        // prepare query for execution
        $stmt = $con->prepare($query);
 
        // posted values
        $full_name=htmlspecialchars(strip_tags($_POST['full_name']));
        $email=htmlspecialchars(strip_tags($_POST['email']));
        $psw=htmlspecialchars(strip_tags($_POST['psw']));
        $role=htmlspecialchars(strip_tags($_POST['role']));
        $police_id=htmlspecialchars(strip_tags($_POST['police_id']));
        $admin_id=htmlspecialchars(strip_tags($_POST['admin_id']));
        
        // Clean police and admin ids
        $police_id = (empty($police_id)) ? NULL : $police_id;
        $admin_id = (empty($admin_id)) ? NULL : $admin_id;
 
        // bind the parameters
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':psw', $psw);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':police_id', $police_id);
        $stmt->bindParam(':admin_id', $admin_id);


        // specify when this record was inserted to the database
        $date_joined=date('Y-m-d H:i:s');
        $stmt->bindParam(':date_joined', $date_joined);
        
 
        // Execute the query
        if($stmt->execute()){
           header("Location: login.php");
        }else{
            echo "<div class='alert alert-danger'>Unable to save record." . $stmt->errorInfo()[2] . "</div>";
        }
 
    }
 
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BloodHound | Sign Up!</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
        color: #8593AE;
        font-weight: bold;
        background: #5A4E4D !important;
        border-radius: 3px;
        border: none;
        min-width: 140px;
    }

    .signup-form .btn:hover,
    .signup-form .btn:focus {
        background: #8593AE !important;
        color: #5A4E4D;
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
    .register{
        background-image: url("img/2ndslide.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    span{
        background: #F8F5F2;
    }
    input{
        background: #F8F5F2; 
    }
    </style>
</head>

<body class="register">
    <div class="signup-form">
        <form method="post">
            <h2>Sign Up</h2>
            <p class="lead">Become a Member of Bloodhound!</p>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="required">
                </div>
            </div>
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
                <i class="fa fa-users"></i>
                <br>
                <br>
                <input type="radio" id="officer" name="role" value="officer" />
                <label for="officer">Police Officer</label>
                <br>
                <input class="form-control" name="police_id" type="number" placeholder="Police ID (Officer)" />
                <input type="radio" id="admin" name="role" value="admin" />
                <label for="admin">Adminstration</label>
                <input class="form-control" name="admin_id" type="number" placeholder="Admin ID (Admin)" />

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-lg" style="background-color: #5A4E4D;">Sign Up</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#" style="color: #5A4E4D;">Terms &amp;
                    Conditions</a>, and <a href="#" style="color: #5A4E4D;">Privacy Policy</a>.</p>
        </form>
        <div class="text-center" style="color: #F8F5F2;">Already have an account? <a href="login.php">Login here</a>.</div>
    </div>
    </div>

</body>

</html>