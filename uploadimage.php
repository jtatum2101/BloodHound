<?php
include 'config.php';
if(isset($_POST['submit'])){
    $extension = array('jpeg', 'png', 'jpg', 'gif');
    
    echo $filename = $_FILES['mugshot']['name'];
    echo $mugshot = $_FILES['mugshot']['tmp_name'];
    
    echo '<br>';
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $finalimg = '';
    if(in_array($ext,$extension)){
        if(!file_exists('img/'.$filename)){
            move_uploaded_file($mugshot, '/opt/lampp/htdocs/BloodHound/img/'.$filename);
            $finalimg = $filename;

        }else{
            $filename=str_replace('.', '-', basename($filename, $ext));
            $newfilename=$filename.time(). ".".$ext;
            $newfilename = move_uploaded_file($mugshot, '/opt/lampp/htdocs/BloodHound/img/'.basename($filename, $ext));
            $finalimg = $newfilename;
        }

        $query = "INSERT INTO records (mugshot) VALUES ('$finalimg')";
        $stmt = mysqli_prepare($db, $query);
        mysqli_query($db, $query);
        $stmt->execute();
        // header("Location: officer-view-my-records.php");
        
    }
    
}

