<?php

//This is the directory where images will be saved
$target = "../img/";
$target = $target . basename( $_FILES['photo']['name']);

//This gets all the other information from the form
$id=$_POST['pet_id'];
$name=$_POST['pet_name'];
$type=$_POST['pet_type'];
$breed=$_POST['pet_breed'];
$sex=$_POST['pet_sex'];
$weight=$_POST['pet_weight'];
$description=$_POST['pet_description'];

// Connects to your Database
require_once 'db_connect.php';

//Writes the information to the database
mysql_query("INSERT INTO pets (id,name,breed, type,sex,weight_in_lbs,description)
VALUES ('$id', '$name', 'breed' , '$type', '$sex', '$weight', '$description')") ;

if($db->query($sql)) {
    echo '        <div class="alert alert-success">Pet Added Successfully.</div>' . PHP_EOL;
    } else {
    echo '        <div class="alert alert-danger">Error: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
    exit(); // Prevents the rest of the file from running
    }

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

//Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
?>