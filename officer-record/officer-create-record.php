<?php

include 'database.php';
include 'config.php';
if($_POST){

    session_start();
    $query = "INSERT INTO records (mugshot, criminal_name, criminal_birth_date, criminal_weight, criminal_height, criminal_eye_color, criminal_hair_color, criminal_ethnicity, criminal_charges, criminal_date_of_arrest, criminal_county_of_arrest, author_of_record) VALUES ( :mugshot, :criminal_name, :criminal_birth_date, :criminal_weight, :criminal_height, :criminal_eye_color, :criminal_hair_color, :criminal_ethnicity, :criminal_charges, :criminal_date_of_arrest, :criminal_county_of_arrest, :author_of_record)";
    $stmt = $con->prepare($query);


    $mugshot=htmlspecialchars(strip_tags($_POST['mugshot']));
    $criminal_name=htmlspecialchars(strip_tags($_POST['criminal_name']));
    $criminal_birth_date=htmlspecialchars(strip_tags($_POST['criminal_birth_date']));
    $criminal_weight=htmlspecialchars(strip_tags($_POST['criminal_weight']));
    $criminal_height=htmlspecialchars(strip_tags($_POST['criminal_height']));
    $criminal_eye_color=htmlspecialchars(strip_tags($_POST['criminal_eye_color']));
    $criminal_hair_color=htmlspecialchars(strip_tags($_POST['criminal_hair_color']));
    $criminal_ethnicity=htmlspecialchars(strip_tags($_POST['criminal_ethnicity']));
    $criminal_charges=htmlspecialchars(strip_tags($_POST['criminal_charges']));
    $criminal_date_of_arrest=htmlspecialchars(strip_tags($_POST['criminal_date_of_arrest']));
    $criminal_county_of_arrest=htmlspecialchars(strip_tags($_POST['criminal_county_of_arrest']));
    $author_of_record=htmlspecialchars(strip_tags($_POST['author_of_record']));


    $mugshot = (empty($mugshot)) ? NULL : $mugshot;

    $stmt->bindParam(':criminal_name', $criminal_name);
    $criminal_birth_date= date('Y-m-d');
    $stmt->bindParam(':criminal_birth_date', $criminal_birth_date);
    $stmt->bindParam(':criminal_weight', $criminal_weight);
    $stmt->bindParam(':criminal_height', $criminal_height);
    $stmt->bindParam(':criminal_eye_color', $criminal_eye_color);
    $stmt->bindParam(':criminal_hair_color', $criminal_hair_color);
    $stmt->bindParam(':criminal_ethnicity', $criminal_ethnicity);
    $stmt->bindParam(':criminal_charges', $criminal_charges);
    $criminal_date_of_arrest=date('Y-m-d');
    $stmt->bindParam(':criminal_date_of_arrest', $criminal_date_of_arrest);
    $stmt->bindParam(':criminal_county_of_arrest', $criminal_county_of_arrest);
    $stmt->bindParam(':author_of_record', $author_of_record);
    if($stmt->execute()){
        echo Post completed!;
    }else{
        echo Try again! . $stmt->errorInfo()[2];
    }



    catch(PDOException $exception){
        die('ERROR ' . $exception->getMessage());

    }
}
?>