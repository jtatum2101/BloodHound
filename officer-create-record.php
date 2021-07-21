<?php

session_start();
if($_POST){
    include 'database.php';
    include 'config.php';
        $query = "INSERT INTO records (mugshot, criminal_name, criminal_birth_date, criminal_weight, criminal_height, criminal_eye_color, criminal_hair_color, criminal_ethnicity, criminal_charges, criminal_date_of_arrest, criminal_county_of_arrest, author_of_record) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);
        
        $params = [
            file_get_contents($_FILES['mugshot']['tmp_name']),
            $_POST['criminal_name'],
            $_POST['criminal_birth_date'],
            $_POST['criminal_weight'],
            $_POST['criminal_height'],
            $_POST['criminal_eye_color'],
            $_POST['criminal_hair_color'],
            $_POST['criminal_ethnicity'],
            $_POST['criminal_charges'],
            $_POST['criminal_date_of_arrest'],
            $_POST['criminal_county_of_arrest'],
            $_POST['author_of_record']
        ];

        $stmt->bind_param('bsssssssssss', $params);

        // $stmt->bind_param(file_get_contents($_FILES['mugshot']['tmp_name']), $mugshot);
        // $stmt->bind_param($_POST['criminal_name'], $criminal_name);
        // $criminal_birth_date= date('Y-m-d');
        // $stmt->bind_param($_POST['criminal_birth_date'], $criminal_birth_date);
        // $stmt->bind_param($_POST['criminal_weight'], $criminal_weight);
        // $stmt->bind_param($_POST['criminal_height'], $criminal_height);
        // $stmt->bind_param($_POST['criminal_eye_color'], $criminal_eye_color);
        // $stmt->bind_param($_POST['criminal_hair_color'], $criminal_hair_color);
        // $stmt->bind_param($_POST['criminal_ethnicity'], $criminal_ethnicity);
        // $stmt->bind_param($_POST['criminal_charges'], $criminal_charges);
        // $criminal_date_of_arrest=date('Y-m-d');
        // $stmt->bind_param($_POST['criminal_date_of_arrest'], $criminal_date_of_arrest);
        // $stmt->bind_param($_POST['criminal_county_of_arrest'], $criminal_county_of_arrest);
        // $stmt->bind_param($_POST['author_of_record'], $author_of_record);
        $stmt->execute();
        if($stmt->execute()){
            header("Location: officer-view-my-records.php");
        }else{
            echo 'Try again,' . $stmt->errorInfo()[0] . "!";
        }
        $stmt->close();
        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound || Officer Dash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.3/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<style>
body {
    font-size: 14px;
    font-family: Lato, "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #666;
    background: #f2f2f2;
    /*-webkit-text-size-adjust: 100%;*/
    -moz-osx-font-smoothing: grayscale;
    /*-webkit-font-smoothing: antialiased;*/
}

a {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

/* ------------ Sidenav CSS ------------- */
#sidenav {
    position: fixed;
    width: 300px;
    height: auto;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 99999;
    background: #8593AE;
}

#sidenav.open {
    left: -300px;
}

#sidenav .logo {
    width: 100%;
    padding: 20px 50px;
    background-color: #8593AE;
    display: block;
}

#sidenav .logo a {
    color: #dadada;
    font-size: 30px;
}

#sidenav .logo a.nav-icon {
    display: none;
}

#sidenav .menu {
    position: static;
}

#sidenav .menu ul {
    list-style: none;
    background-color: #8593AE;
    padding: 10% 0;
    margin: 0;
}

#sidenav .menu ul li {
    padding: 6px 14%;
}

#sidenav .menu ul li.active {
    border-left: solid 4px #F8F5F2;
}

#sidenav .menu ul li a {
    font-size: 22px;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 300;
    display: block;
    background-color: #8593AE;
}

#sidenav .menu ul li a:hover {
    color: rgba(255, 255, 255, 0.5);
}

#sidenav .menu ul li a.logout:hover {
    color: #F8F5F2;
}

#sidenav .menu ul li ul {
    list-style: none;
    margin: 10px auto 0;
    padding: 10px 15px;
    border-top: solid 1px rgba(255, 255, 255, 0.08);
    border-bottom: solid 1px rgba(255, 255, 255, 0.08);
}

#sidenav .menu ul li ul li {
    padding: 6px 3px;
}

#sidenav .menu ul li ul li a {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.7);
}

@media (max-width: 768px) {
    #sidenav {
        width: 100%;
        height: 60px;
        background: none;
    }

    #sidenav .logo {
        padding: 10px 20px;
    }

    #sidenav .logo a {
        font-size: 20px;
    }

    #sidenav .logo a.nav-icon {
        display: inline;
    }

    #sidenav .menu {
        display: none;
    }

    #sidenav .menu.open {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: -1;
        display: block !important;
    }

    #sidenav .menu ul {
        border-top: solid 1px #5A4E4D;
    }

    #sidenav .menu ul li {
        padding: 6px 5%;
    }
}

.accordion .card {
    background: none;
    border: none;
}

.accordion .card .card-header {
    background: none;
    border: none;
    padding: .4rem 1rem;
    font-family: "Roboto", sans-serif;
}

.accordion .card-header h2 span {
    float: left;
    margin-top: 10px;
}

.accordion .card-header .btn {
    color: #5A4E4D;
    font-size: 1.04rem;
    text-align: left;
    position: relative;
    font-weight: 500;
    padding-left: 2rem;
}

.accordion .card-header i {
    font-size: 1.2rem;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 9px;
    color: #5A4E4D;
}

.accordion .card-header .btn:hover {
    color: #F8F5F2;
}

.accordion .card-body {
    color: #8593AE;
    padding: 0rem 0rem;
}

.page-title {
    margin: 3rem 0 3rem 1rem;
    font-family: "Roboto", sans-serif;
    position: relative;
}

.page-title::after {
    content: "";
    width: 80px;
    position: absolute;
    height: 3px;
    border-radius: 1px;
    background: #F8F5F2;
    left: 0;
    bottom: -15px;
}

.accordion .highlight .btn {
    color: #F8F5F2;
}

.accordion .highlight i {
    transform: rotate(180deg);
    color: #F8F5F2;
}

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

.register {
    background-color: #5A4E4D;
    background-repeat: no-repeat;
    background-size: cover;
}

span {
    background: #F8F5F2;
}

input {
    background: #F8F5F2;
}
</style>

<script>
$(document).ready(function() {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").addClass("highlight");
    });

    // Highlight open collapsed element 
    $(".card-header .btn").click(function() {
        $(".card-header").not($(this).parents()).removeClass("highlight");
        $(this).parents(".card-header").toggleClass("highlight");
    });
});
</script>


<body class="register">
    <div class="app">
        <div id="sidenav">
            <div class="wrapper">
                <h1 class="page-title" style="color:#5A4E4D; font-family: 'Playfair Display', serif;">BloodHound:</h1>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">
                                <a class="btn btn-link" style="font-size: 20px; font-family: 'Playfair Display', serif;"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i
                                        class="fa fa-chevron-circle-down"></i><?php echo $_SESSION['full_name']?></a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="officer-profile/officer-profile.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            Profile</a></li>
                                    <hr>
                                    <li><a href="officer-profile/officer-profile-settings.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Profile
                                            Settings</a></li>
                                    <hr>
                                    <li><a href="officer-profile/officer-profile-change-password.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Change
                                            Password</a></li>
                                    <hr>

                                    <hr>
                                    <li><a href="logout.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Log
                                            Out</a></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <a style="font-size: 20px; font-family: 'Playfair Display', serif;"
                                    class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"><i
                                        class="fa fa-chevron-circle-down"></i>Records</a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul style="text-align: left;">
                                    <li><a href="officer-create-record.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Create
                                            A Record</a></li>
                                    <hr>
                                    <li><a href="officer-view-my-records.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            My Records</a></li>
                                    <hr>
                                    <li><a href="officer-view-by-charge.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            My Records by Charge</a></li>
                                    <hr>
                                    <li><a href="officer-view-by-name.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            My Records by Name</a></li>
                                    <hr>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
        </div>
        <div class="signup-form">
            <form method="post" style="margin-left: 100px;margin-right: -100px;" enctype="multipart/form-data">
                <h2>Create A Report</h2>
                <p>Create a criminal record by providing this information!</p>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-camera"></i>
                        </span>
                        <input type="file" class="form-control" name="mugshot" placeholder="Upload">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_name" placeholder="Criminal Name"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-birthday-cake"></i>
                        </span>
                        <input type="date" class="form-control" name="criminal_birth_date" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-weight"></i>
                        </span>
                        <input type="number" class="form-control" name="criminal_weight" placeholder="Weight (lbs)"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-ruler-vertical"></i>
                        </span>
                        <input type="number" class="form-control" name="criminal_height" placeholder="Height (inches)"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_eye_color"
                            placeholder="Criminal Eye Color" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_hair_color"
                            placeholder="Criminal Hair Color" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_ethnicity"
                            placeholder="Criminal Ethnicity" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-gavel"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_charges" placeholder="Criminal Charges"
                            required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar-week"></i>
                        </span>
                        <input type="date" class="form-control" name="criminal_date_of_arrest" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-flag-usa"></i>
                        </span>
                        <input type="text" class="form-control" name="criminal_county_of_arrest"
                            placeholder="County of Arrest" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-id-badge"></i>
                        </span>
                        <input type="text" class="form-control" name="author_of_record"
                            placeholder="Who filed this report" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-block btn-lg"
                        style="background-color: #5A4E4D;">Create
                        Record</button>
                </div>

            </form>


        </div>


</body>

</html>