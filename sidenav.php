    <div class="app">
    <div id="sidenav">
        <div class="wrapper">
            <h1 class="page-title" style="color:#5A4E4D; font-family: 'Playfair Display', serif;">BloodHound:
            </h1>
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
    </div>