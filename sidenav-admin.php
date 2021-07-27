
    <div class="app">
        <div id="sidenav">
            <div class="wrapper">
                <h1 class="page-title" style="color:#5A4E4D; font-family: 'Playfair Display', serif;"><a href="dashboard-admin.php" class="btn" style="font-size: 35px; font-family: 'Playfair Display', serif; color:#5A4E4D;">BloodHound:</a></h1>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">
                                <a class="btn btn-link" style="font-size: 20px; font-family: 'Playfair Display', serif;"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i>
                                    <?php echo $_SESSION['full_name'] ?></a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
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
                                        class="fa fa-chevron-circle-down"></i>Users</a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="admin-view-all-users.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            All Users</a></li>
                                    <hr>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed"
                                    style="font-size: 20px; font-family: 'Playfair Display', serif;"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"><i class="fa fa-chevron-circle-down"></i>Records</a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="admin-records-view-all-records.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View
                                            All Records</a></li>
                                    <hr>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <a class="btn btn-link collapsed"
                                    style="font-size: 20px; font-family: 'Playfair Display', serif;"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour"><i class="fa fa-chevron-circle-down"></i>Counties</a>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="admin-counties-create-a-county.php"
                                            style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">Create
                                            A County</a></li>
                                    <hr>
                                    <li><a href="admin-counties-view-all-counties.php" style="font-size: 18px; color: #5A4E4D; font-family: 'Playfair Display', serif;">View All Counties</a></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
        </div>