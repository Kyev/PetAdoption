<?php
//require_once './php/db_connect.php';
// ini_set('display_errors', '1');
//error_reporting(0);
include 'pet.inc.php';
?>

<!DOCTYPE html>
<html >
<head>
    
<style>
.glyphicon:before {
 visibility: visible;
}
.glyphicon.glyphicon-star-empty:checked:before {
   content: "\e006";
}
input[type=checkbox].glyphicon{
    visibility: hidden;
    
}    
</style>    
  <meta charset="UTF-8">
  <title>Pets'R'Us</title>
<script src="../js/moment.js"></script>
<script src="../js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!-- Include Required Prerequisites -->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
</head>

<body>
  <html>

<head>
  <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="header">
    <div class="container">
      <ul>
        <li class="main"><a href="../index.html"><img src="../img/Pets_R_Us_sml.png" alt="Logo"></a></li>
        <li><a href="../html/about.html">About</a></li>
        <li><a href="../html/animals.html">Animals</a></li>
        <li><a href="#">Register</a></li>
          <li><a href="../html/login.html">Login</a></li>
      </ul>
    </div>
  </div>


  <div class="supporting">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
<!--            Empty-->
        </div>
        <div class="col-md-10">
            
        
    <h1>Add Pet</h1>
    <div>
        <form method="POST">
            <input type="text" name="name" placeholder="Pet name">

            <select name="type">
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
            </select>
            <select name="breed">
                <option>Breed</option>
                <option value="Pitbull">Pitbull</option>
                <option value="Cavapoo">Cavapoo</option>
            </select>
            <select name="sex">
                <option value="Male">Male</option>
                <option value="Female ">Female</option>
            </select>
            <select name="size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
            <select name="status">
                <option value="Available">Available</option>
                <option value="Reserved">Reserved</option>
            </select>

            <input type="text" name="description" placeholder="Pet descprition">
            <input type="text" name="image" placeholder="Pet image">

            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
            
    <?php

        $name = $_POST['name'];
        $type = $_POST['type'];
        $breed = $_POST['breed'];
        $sex = $_POST['sex'];
        $description = $_POST['description'];
        $size = $_POST['size'];
        $image = $_POST['image'];

        $add = new Pet();
        $add->addPet($name, $breed, $type, $sex, $size, $description, $image);

        /*$type = $_POST['type'];

        $search = new Pet();
        $search->getPets($type);*/

    ?>
    


   
        </div>
        <div class="col-md-1">
<!--          Empty-->
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
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    

  
</body>
</html>






