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
        <li><a href="../php/animals.php">Animals</a></li>
        <li><a href="../php/register.php">Register</a></li>
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
            <input type="text" name="breed" placeholder="Breed/Type">
            <input type="text" name="description" placeholder="Pet descprition">
            <input type="text" name="image" placeholder="Pet image">
            <select name="type">
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
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



            <p><button type="submit" name="submit" value="submit">Submit</button></p>
        </form>
    </div>
            
    <?php
        if (isset($_POST['name']))
        $name = $_POST['name'];
        if (isset($_POST['type']))
        $type = $_POST['type'];
        if (isset($_POST['breed']))    
        $breed = $_POST['breed'];
        if (isset($_POST['sex']))    
        $sex = $_POST['sex'];
        if (isset($_POST['description']))
        $description = $_POST['description'];
        if (isset($_POST['size']))
        $size = $_POST['size'];
        if (isset($_POST['image']))
        $image = $_POST['image'];
            
        if (isset($_POST['name']))
        {
        $add = new Pet();
        $add->addPet($name, $breed, $type, $sex, $size, $description, $image);
        }
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
        </div>
      </div>
    </div>
  </div>
</body>

</html>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    

  
</body>
</html>






