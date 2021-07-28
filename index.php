<?php
session_start();
include_once 'navbar.php';
include 'config.php';

if($_POST){
    try{
        $feedback_name = htmlspecialchars(strip_tags($_POST['feedback_name']));
        $feedback_email = htmlspecialchars(strip_tags($_POST['feedback_email']));
        $feedback_message = htmlspecialchars(strip_tags($_POST['feedback_message']));
        $feedbackquery = "INSERT INTO feedback (feedback_name, feedback_email, feedback_message) VALUES (:feedback_name, :feedback_email, :feedback_message)";
        $stmt = $con->prepare($feedbackquery);
        $stmt->bindParam(':feedback_name', $feedback_name);
        $stmt->bindParam(':feedback_email', $feedback_email);
        $stmt->bindParam(':feedback_message', $feedback_message);
        $stmt->execute();
    }catch (Exception $e){
        echo "Error: " . $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BloodHound | Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <style>

    </style>
</head>

<body>
    <section id="top">
        <img id="top-city" src="img/city.gif" alt="city" />
        <h1>Welcome to BloodHound!</h1>
        <h2>Crime Record Management System</h2>

    </section>




    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>

    <style>
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
        color: #DF1F2D;
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
        color: #DF1F2D;
    }

    .accordion .card-header .btn:hover {
        color: #F8F5F2;
    }

    .accordion .card-body {
        color: white;
        padding: 0.5rem 3rem;
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
    
    <main id="moreInfo">
        <div class="container-lg" style="background-color: #060606;">
        <div class=" row">
            <div class="col-lg-12">
                <h1 class="page-title" style="color:#DF1F2D; font-family: 'Playfair Display', serif;">FAQs:</h1>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">
                                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    style="font-family: 'Playfair Display', serif;"><i
                                        class="fa fa-chevron-circle-down"></i> What is Bloodhound?</a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body" style="font-family: 'Playfair Display', serif;">BloodHound is a Crime
                                Record Management System that is accessible to
                                Police Officers and Adminstration! This website and its functionality was created by
                                only one Software Developer.
                                The System is written to manage not only records but also all the users both admin and
                                police officers. I hope that you are ready to start working with us.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"
                                    style="font-family: 'Playfair Display', serif;"><i
                                        class="fa fa-chevron-circle-down"></i>What is your Main Goal?</a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body" style="font-family: 'Playfair Display', serif;">BloodHound's main
                                goal is to reach to all the police stations across
                                the United States. We are currently used in 5 different states and 20 different counties
                                across those 5 states! Help us reach our goal to reach across the United States!</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree"
                                    style="font-family: 'Playfair Display', serif;"><i
                                        class="fa fa-chevron-circle-down"></i>What is the admin's role?</a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body" style="font-family: 'Playfair Display', serif;"> As an Admin, You
                                will have full control over the system. You will
                                have the responsibilities like:
                                <ul>
                                    <li>Management of records and edit or deleting those records.</li>
                                    <li>Management of the users.</li>
                                    <li>View all records and users details.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour"
                                    style="font-family: 'Playfair Display', serif;"><i
                                        class="fa fa-chevron-circle-down"></i> What is the officer's role?</a>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body" style="font-family: 'Playfair Display', serif;">As an Officer, you
                                have have a smaller portion of responsibilities
                                like:
                                <ul>
                                    <li>Creating Criminal Records.</li>
                                    <li>Search Criminal by Charges and Name.</li>
                                    <li>View all records.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <style>
        html,
        body {
            min-height: 100%;
        }

        body {
            background: #060606;
            /* Fallback for browsers that don't support gradients */
            font-family: "Varela Round", sans-serif;
        }

        .form-control {
            border-color: #d7d7d7;
            box-shadow: none;
        }

        .form-control:focus,
        .btn:focus {
            border-color: #a177ff;
            box-shadow: 0 0 8px #c2a8ff;
        }

        .contact-form {
            width: 500px;
            margin: 0 auto;
            padding: 40px 0;
        }

        .contact-form form {
            background: #fff;
            padding: 40px;
            border-radius: 6px;
        }

        .contact-form h1 {
            text-align: center;
            font-size: 50px;
            margin: 0 0 15px;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form .form-control,
        .contact-form .btn {
            border-radius: 2px;
            min-height: 40px;
            transition: all 0.5s;
            outline: none;
        }

        .contact-form .btn {
            background: #060606;
            font-size: 16px;
            min-height: 50px;
            border: none;
            color: #DF1F2D;
        }

        .contact-form .btn:hover,
        .contact-form .btn:focus {
            background: #DF1F2D;
            outline: none;
            color: #060606;
        }

        .contact-form .btn i {
            margin-right: 5px;
        }

        .contact-form label {
            color: #bbb;
            font-weight: normal;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .hint-text {
            font-size: 15px;
            text-align: center;
            padding-bottom: 25px;
            opacity: 0.8;
        }
        </style>
        <hr id="contact">
        <div class="contact-form">
            <form method="post" >
                <h1 style="font-family: 'Playfair Display', serif;">Contact Us</h1>
                <p class="hint-text" style="font-family: 'Playfair Display', serif;">We'd love to hear from you, please
                    drop us a line if you've any query related to our
                    products or services.</p>
                <div class="form-group">
                    <label for="inputName" style="font-family: 'Playfair Display', serif;">Name</label>
                    <input type="text" class="form-control" name="feedback_name" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail" style="font-family: 'Playfair Display', serif;">Email Address</label>
                    <input type="email" class="form-control" name="feedback_email" required>
                </div>
                <div class="form-group">
                    <label for="inputMessage" style="font-family: 'Playfair Display', serif;">Message</label>
                    <textarea class="form-control" name="feedback_message" rows="5" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block"
                    style="font-family: 'Playfair Display', serif;"><i class="fa fa-paper-plane"></i> Send
                    Message</button>
            </form>
        </div>
    </main>
</body>

</html>