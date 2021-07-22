<?php
include 'config.php';
if(isset($_POST['submit'])){
    $extension = array('jpeg', 'png', 'jpg', 'gif');
    
    echo $filename = $_FILES['mugshot']['name'];
    $filename_tmp = $_FILES['mugshot']['tmp_name'];
    echo '<br>';
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $mugshot = '';
    if(in_array($ext,$extension)){
        if(!file_exists('img/'.$filename)){
            move_uploaded_file($filename_tmp, '/opt/lampp/htdocs/BloodHound/img/'.$filename);
            $mugshot = $filename;
        }else{
            $filename=str_replace('.', '-', basename($filename, $ext));
            $newfilename=$filename.time(). ".".$ext;
            move_uploaded_file($filename_tmp, '/opt/lampp/htdocs/BloodHound/img/'.basename($filename, $ext));
            $mugshot = $newfilename;
        }

        $query = "INSERT INTO records (mugshot) VALUES ('$mugshot')";
        $stmt->prepare($db, $query);
        $stmt->bind_param('s', $mugshot);
        $stmt->execute();
        header("Location: officer-view-my-records.php");

    }
    
}

