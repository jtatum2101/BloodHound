<?php
include_once 'header.php';
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
            <form action="signup.inc.php" style="max-width:500px;margin:auto">
                <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" placeholder="Full Name" name="name">
                </div>
                <br>
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="text" placeholder="Email" name="email">
                </div>
                <br>

                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="psw">
                </div>
                <br>
                <div class="input-container">
                    <i class="fa fa-users icon"></i>
                    <br>
                    <input type="radio" id="citizen" name="role" value="citizen">
                    <label for="citizen">Citizen</label><br>
                    <input type="radio" id="officer" name="role" value="officer">
                    <label for="officer">Police Officer</label><br>
                    <div class="reveal-if-active">
                        <input class="input-field reveal-if-active" type="text" id="police-id" placeholder="Police ID"></input>
                    </div>

                    <input type="radio" id="admin" name="role" value="admin">
                    <label for="admin">Adminstration</label>

                </div>

                <br>

                <button type="submit" class="btn">Register</button>
            </form>



        </section>
        </p>
</body>

</html>