<?php

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
$sql = "INSERT INTO PETS (id, name, breed, type, sex, weight_in_lbs, description) VALUES ('$id', '$name', '$breed', '$type', '$sex', '$weight', '$description') ";
$result=$db->query($sql);


if($result->num_rows > 0) {
    echo '        <div class="alert alert-success">Pet Added Successfully.</div>' . PHP_EOL;
    } else {
    echo '        <div class="alert alert-danger">Error: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
    exit(); // Prevents the rest of the file from running
    }

?>