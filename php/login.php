<?php 

  if (isset($_POST['submit']))
  {
    if (isset($_POST['uid']) && isset($_POST['pwd'])){
      $user = $_POST['uid'];
      $pw = $_POST['pw'];
      if($user === 'admin' && $pw === 'admin'){
        header("Location:http://lamp.cse.fau.edu/~abutt2015/PetAdoption/html/admin_login.html");
        exit;
      }
      else{
        header("Location:http://lamp.cse.fau.edu/~abutt2015/PetAdoption/php/animals.php");
        exit; 
      }
    }
    else{
      echo
      "
          <script>
              function myFunction() {
              alert('Please enter valid username and password!');
              }
          </script>
      ";    
    }
    $_POST = array();
  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pets'R'Us</title>

  <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
    <div class="container">
        <ul>
            <li class="main">
                <a href="../index.html"><img src="../img/Pets_R_Us_sml.png" alt="Logo" id="logo"></a>
            </li>
            <li><a href="../php/animals.php">Animals</a></li>
            <li><a href="../php/register.php">Register</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</div>

  <div class="jumbotron">
    <div class="container">
        <div class="headercontainer">
            <h2>Welcome</h2>
        </div>
        <div class="form">
            <form method="POST" ><!--method="POST"-->
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
  </div>

  <div class="footer">
    <div class="copy">© Pets'R'Us</div>
  </div>
    
</body>
</html>
