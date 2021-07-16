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
    <title>BloodHound || Dashboard(Admin)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

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