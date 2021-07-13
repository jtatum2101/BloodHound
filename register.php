<?php
include_once 'header.php';
?>
<?php
if($_POST){
 
    // include database connection
    include 'database.php';
 
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound | Sign Up!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" href="js/script.js"></script>
</head>

<body>
    <br>
    <br>
    <br>
    <br>

    <div class="wrapper">
        <section id="About" class="index-intro">
            <h1 style="font-size: 60px;">Sign Up:</h1>
            <br>
            <br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"
                style="max-width:500px;margin:auto">
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" placeholder="Full Name" name="full_name" />
                </div>
                <br>
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="text" placeholder="Email" name="email" />
                </div>
                <br>

                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="psw" />
                </div>
                <br>
                <div class="input-container">
                    <i class="fa fa-users icon"></i>
                    <br>
                    <input type="radio" id="officer" name="role" value="officer" />
                    <label for="officer">Police Officer</label><br>
                    <input class="input-field" name="police_id" type="number" placeholder="Police ID (Officer)" />
                    <input type="radio" id="admin" name="role" value="admin" />
                    <label for="admin">Adminstration</label>
                    <input class="input-field" name="admin_id" type="number" placeholder="Admin ID (Admin)" />
                </div>

                <br>

                <button type="submit" value="Save" class="btn">Register</button>
            </form>



        </section>
        </p>
</body>

</html>