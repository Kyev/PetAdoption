<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pets'R'Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/animals.css">
</head>

<body>
<div class="header">
    <div class="container">
        <ul>
            <li class="main">
                <a href="#"><img src="../img/Pets_R_Us_sml.png" alt="Logo" id="logo"></a>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="animals.html">Animals</a></li>
            <li><a href="../">Logout</a></li>
        </ul>
    </div>
</div>

<!--
< <div class="jumbotron">-->
<div class="container">
    <div class="row">
        <h3>New Pet</h3>
        <div class="col-sm-4">
            <div class="side_wrapper">
                <form action="addPet.php" method="post" name="contactform">
                    <p>Pet ID *</p>
                    <p><input maxlength="50" name="pet_id" size="30" type="text" /></p>
                    <p>Pet Name *</p>
                    <p><input maxlength="50" name="pet_name" size="30" type="text" /></p>
                    <p>Pet Breed *</p>
                    <p><input maxlength="50" name="pet_breed" size="30" type="text" /></p>
                    <p>Pet Type</p>
                    <p><input maxlength="30" name="pet_type" size="30" type="text" /></p>
                    <p>Pet Sex *</p>
                    <p><input maxlength="80" name="pet_sex" size="30" type="text" /></p>
                    <p>Pet Weight *</p>
                    <p><input maxlength="30" name="pet_weight" size="30" type="text" /></p>
                    <p>Pet Description *</p>
                    <p><textarea cols="25" maxlength="1000" name="pet_description" rows="6"></textarea></p>
                    <p><input type="submit" value="Submit" /></p>
                </form>
            </div>
        </div>
    </div>
</div>

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
require_once '../php/db_connect.php';

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

<div class="supporting">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!--  <h2>Search</h2>
        <p>Find a pet based on location, type, breed, age, and gender. We look through hundreds of shelters, agencies, and rescue sites.</p>
        <a href="#" class="btn">Go</a>-->
            </div>
            <div class="col-md-4">
                <!-- <h2>Learn</h2>
        <p>Read articles on feeding, training, grooming, and more. Our resources ensure that you are fully prepared as a new pet owner.</p>
        <a href="#" class="btn">Go</a>-->
            </div>
            <div class="col-md-4">
                <!--   <h2>Help</h2>
        <p>Get involved to help pets in need. You can make a difference through volunteering, social media, and donations.</p>
        <a href="#" class="btn">Go</a>-->
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="copy">© Pets'R'Us</div>
            </div>
            <div class="col-md-10">
                <ul class="nav nav-pills pull-right">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>

</html>

