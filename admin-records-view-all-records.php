<?php
    session_start();
    include 'config.php';
        try{
            
            $query = "SELECT * FROM records";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':mugshot', $mugshot);
            $stmt->bindParam(':criminal_name', $criminal_name);
            $stmt->bindParam(':criminal_birth_date', $criminal_birth_date);
            $stmt->bindParam(':criminal_weight', $criminal_weight);
            $stmt->bindParam(':criminal_height', $criminal_height);
            $stmt->bindParam(':criminal_eye_color', $criminal_eye_color);
            $stmt->bindParam(':criminal_hair_color', $criminal_hair_color);
            $stmt->bindParam(':criminal_ethnicity', $criminal_ethnicity);
            $stmt->bindParam(':criminal_charges', $criminal_charges);
            $stmt->bindParam(':criminal_date_of_arrest', $criminal_date_of_arrest);
            $stmt->bindParam(':criminal_county_of_arrest', $criminal_county_of_arrest);
            $stmt->bindParam(':author_of_record', $author_of_record);
            $stmt->execute();      
         
            } catch(PDOException $e) {
                 echo "Error: " . $e->getMessage();
            }
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodHound || Admin-Records</title>
    <link rel="shortcut icon" href="img/bloodhound.ico"/>
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
    background-image: url('img/adminbackground.gif');
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
    background: white;
}

#sidenav.open {
    left: -300px;
}

#sidenav .logo {
    width: 100%;
    padding: 20px 50px;
    background-color: white;
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
    background-color: white;
    padding: 10% 0;
    margin: 0;
}

#sidenav .menu ul li {
    padding: 5px 14%;
}

#sidenav .menu ul li.active {
    border-left: solid 4px red;
}

#sidenav .menu ul li a {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 300;
    display: block;
    background-color: white;
}

#sidenav .menu ul li a:hover {
    color: rgba(255, 255, 255, 0.5);
}

#sidenav .menu ul li a.logout:hover {
    color: #DF1F2D;
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
    font-size: 15px;
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
    color: #060606;
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
    color: #060606;
}

.accordion .card-header .btn:hover {
    color: #DF1F2D;
    text-decoration: none;
}

.accordion .card-body {
    color: white;
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
    background: #DF1F2D;
    left: 0;
    bottom: -15px;
}

.accordion .highlight .btn {
    color: #DF1F2D;
}

.accordion .highlight i {
    transform: rotate(180deg);
    color: #DF1F2D;
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


<body style="margin-left: 300px; background-image: url(img/record.jpg);">
    <?php
        include 'sidenav-admin.php';
    ?>
    <h2 style="color: white; font-size: 60px; font-family: 'Playfair Display', serif; text-shadow: 3px 3px 5px #060606;"><center>RECORDS:</center></h2>
    <table class="table table-bordered table-dark" style="margin-top: 108px;">
  <tbody>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
      <tr>
      <thead>
    <tr>
      <th scope="col">Mugshot</th>
      <th scope="col">Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Weight(lbs)</th>
      <th scope="col">Height(inches)</th>
      <th scope="col">Eye Color</th>
      <th scope="col">Hair Color</th>
      <th scope="col">Ethnicity</th>
      <th scope="col">Charges</th>
      <th scope="col">Date Of Arrest</th>
      <th scope="col">County Of Arrest</th>
      <th scope="col">Officer</th>
    </tr>
  </thead>
        <td><img src="<?= "uploads/{$row['mugshot']}" ?>" height="120" width="120"/></td>
        <td><?= $row['criminal_name']; ?></td>
        <td><?= $row['criminal_birth_date']; ?></td>
        <td><?= $row['criminal_weight']; ?></td>
        <td><?= $row['criminal_height']; ?></td>
        <td><?= $row['criminal_eye_color']; ?></td>
        <td><?= $row['criminal_hair_color']; ?></td>
        <td><?= $row['criminal_ethnicity']; ?></td>
        <td><?= $row['criminal_charges']; ?></td>
        <td><?= $row['criminal_date_of_arrest']; ?></td>
        <td><?= $row['criminal_county_of_arrest']; ?></td>
        <td><?= $row['author_of_record']; ?></td>
        <td><a href="admin-records-edit-a-record.php?id=<?= $row['id'] ?>"><i class="fa fa-pencil"></i></a></td>
        <td><a href="admin-records-delete-a-record.php?id=<?= $row['id']?>"><i class="fa fa-trash"></i></a></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</body>
</html>