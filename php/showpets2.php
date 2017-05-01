<?php
//ini_set('display_errors', 1);
include 'pet.inc.php';
session_start();

if(isset($_POST['animalSubmit'])){
    $_SESSION['animal'] = $_POST['animalSubmit'];
}

if(isset($_POST['animalReserve'])){
            
            $id = $_POST['animalReserve'];
            echo $id;
            $res = new Pet();    
            $res->reservePet($id);
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Pets'R'Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/animals.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.html"><img src="../img/Pets_R_Us_sml.png" alt="Logo"></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="animals.php">Animals</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="../html/login.html">Login</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

<?php
    $petSearch = new Pet();
    if(isset($_SESSION['animal'])) $petSearch->getPets($_SESSION['animal']);
?>
    
    
    

<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <div class="copy">© Pets'R'Us</div>
      </div>
    </div>
  </div>
</div>
</body>

</html>
