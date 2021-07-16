<?php

include 'database.php';
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound || Admin Dash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    background: #101010;
}

#sidenav.open {
    left: -300px;
}

#sidenav .logo {
    width: 100%;
    padding: 20px 50px;
    background-color: #5A4E4D;
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
    background-color: #5A4E4D;
    padding: 10% 0;
    margin: 0;
}

#sidenav .menu ul li {
    padding: 6px 14%;
}

#sidenav .menu ul li.active {
    border-left: solid 4px red;
}

#sidenav .menu ul li a {
    font-size: 22px;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 300;
    display: block;
    background-color: #5A4E4D;
}

#sidenav .menu ul li a:hover {
    color: rgba(255, 255, 255, 0.5);
}

#sidenav .menu ul li a.logout:hover {
    color: red;
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
        border-top: solid 1px #333;
    }

    #sidenav .menu ul li {
        padding: 6px 5%;
    }
}

/*# sourceMappingURL=app.main.css.map */
</style>

<script>
$(document).ready(function() {

    $('.menu').niceScroll({
        cursorcolor: '#999999', // Changing the scrollbar color
        cursorwidth: 4, // Changing the scrollbar width
        cursorborder: 'none', // Rempving the scrollbar border
    });

    // when opening the sidebar
    $('.nav-icon').on('click', function() {
        // open sidebar
        $('.menu').toggleClass('open');
    });

    // if dismiss or overlay was clicked
    $('#dismiss').on('click', function() {
        $('#sidenav').removeClass('open');
    });
});
</script>

<body>
    <div class="app">
        <div id="sidenav">
            <div class="wrapper">
                <div class="logo">
                    <a href="#">Dashboard</a>
                    <a href="#" class="nav-icon pull-right"><i class="fa fa-bars"></i></a>
                </div>
                <div class="menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <!-- If login as admin -->
                        <li>
                            <a href="#">My Account</a>
                            <ul>
                                <li><a href="#">Posts</a></li>
                                <li><a href="#">Comments</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Create New Post</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <!-- End If login as admin -->
                        <li><a href="#">About Us</a></li>
                        <li>
                            <a href="#">Category</a>
                            <ul>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Images</a></li>
                                <li><a href="#">Galleries</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Links</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#" class="logout">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>