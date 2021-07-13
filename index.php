<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound | Get Started!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="img-slider" style="margin-left: 300px;margin-top: 20px;">
        <div class="slide active">
            <img src="img/bloodhound.jpeg" alt="" style="height: 532.9px;">
            <div class="info">
                <h1 style="margin-top: 60px; padding-left: 20px;">Welcome to BloodHound!</h1>
                <p style=" background: transparent; margin-left: 205px;">Log In or Sign Up to become a member!</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/police_2.jpeg" alt="">
            <div class="info">
                <h1 style="margin-top: 60px; padding-left: 20px;">What is BloodHound?</h1>
                <p style="background: rgba(215, 0, 39, 0.3);margin-left: 145px;">Blood Hound is a Crime Record
                    Management System Website for Police Officer and Admins. Become a member to learn more.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/slide_3.jpeg" alt="" style="height: 532.9px;">
            <div class="info">
                <h1 style="margin-top: 60px; padding-left: 20px;">Our Main Goal?</h1>
                <p style="background: rgba(215, 0, 39, 0.3);margin-left: 145px;">BloodHound's main goal is to develop
                    the best software applications to share throughout the United States.</p>
            </div>
        </div>
        <div class="slide">
            <img src="img/slide_4.jpeg" alt="">
            <div class="info">
                <h1 style="margin-top: 60px; padding-left: 20px;">Contact Us!</h1>
                <p style="padding-right: 50px;">Email: BloodHoundCrime@bloodhound.org</p>
                <p style="padding-right: 50px; border-radius: 0px;">Phone: (662)-707-4255</p>

            </div>
        </div>
        <div class="navigation">

            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>

        </div>
        <script type="text/javascript">
        var slides = document.querySelectorAll('.slide');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;

        var manualNav = function(manual) {
            slides.forEach((slide) => {
                slide.classList.remove('active');

                btns.forEach((btn) => {
                    btn.classList.remove('active');
                });
            });

            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
                manualNav(i);
                currentSlide = i;
            });
        });
        var repeat = function(activeClass) {
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function() {
                    var slides = document.querySelectorAll('.slide');
                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    slides[i].classList.remove('active');
                    btns[i].classList.add('active');

                    if (slides.length == i) {
                        i = 0;
                    }
                    if (i >= slides.length) {
                        return;
                    }
                    repeater();

                }, 6000);
            }
            repeater();
        }
        repeat();
        </script>
    </div>
</body>

</html>