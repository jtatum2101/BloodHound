<?php
session_start();
include 'database.php';

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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


<body>
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
                                    aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i><?php echo $_SESSION['full_name']?></a>
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
                                    <li><a href="officer-profile/officer-profile-recover-password.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Recover
                                            Password</a></li>
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
</body>

</html>