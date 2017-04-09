<?php
//require_once './php/db_connect.php';
ini_set('display_errors', '1');
//error_reporting(0);
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pets'R'Us</title>

  
</head>

<body>
  <html>

<head>
  <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="header">
    <div class="container">
      <ul>
        <li class="main"><a href="#"><img src="img/Pets_R_Us_sml.png" alt="Logo"></a></li>
        <li><a href="html/about.html">About</a></li>
        <li><a hred="html/animals.html">Animals</a></li>
        <li><a href="html/register.html">Register</a></li>
          <li><a href="html/login.html">Login</a></li>
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
           
          <h2>Registration</h2>
            
                                                
              <div class="container">    
        <div id="loginbox" style="margin-top:5px;" class="mainbox col-md-6 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
      

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                
                            
                            
                            
<?php 
require_once './php/db_connect.php';

    
$valid = 0;
$username = mysql_fix_string($db, $_POST["username"]);
$password = mysql_fix_string($db, $_POST["password"]);
$cpassword = mysql_fix_string($db, $_POST["cpw"]);                          
$fName = mysql_fix_string($db, $_POST["fName"]);
$lName = mysql_fix_string($db, $_POST["lName"]);
                            
     if (!$username || !$password || !$fName || !$lName || !$cpassword)
     {
         echo "<p>
              <h4>
              Please fill in all fields!</h4>
              <a href='register.php'><b>
                    <button type='button' class='btn btn-danger btn-lg'>TRY AGAIN</button>
                    </b>
                     </a>
                    
              
              </p>";
         $valid = 0;
     }
     else if ($cpassword !== $password)
     {
        echo "
        <p>
        <h4>
            
            Password confirmation did not match password, please try again. 
          </h4>  
                    <a href='register.php'><b>
                    <button type='button' class='btn btn-danger btn-lg'>TRY AGAIN</button>
                    </b>
                     </a>
            </p>
        
                            
         <?=$password?>
         <?=$cpassword?>
        ";
     }
                            
     else if ($username   != NULL &&
              $password   != NULL &&
              $fName      != NULL &&
              $lName      != NULL &&
              $cpassword  != NULL)
        {
         $salt1 = "qm&h*";
         $salt2 = "pg!@";
         $hashed = hash('ripemd128', "$salt1$password$salt2");
         $query  = "SELECT * FROM USERS WHERE username = '".$username."'";

         $result = $db->query($query);
         if(!mysqli_fetch_assoc($result))
            {
/*                session_start();
                $valid = 1;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $hashed;
                $_SESSION['fName'] = $fName;
                $_SESSION['lName'] = $lName;*/
                add_user($db, $fName, $lName, $username, $hashed);
/*                $_SESSION['admin'] = FALSE;
                $adminquery = "SELECT username FROM ADMIN";
                $aresult = $_db->query($adminquery);
                while($row2 = $aresult->fetch_assoc())
                {
                    if($row2['username'] == $_SESSION['username'])
                    {
                        $_SESSION['admin'] = TRUE;
                    }
                }*/
                echo 
                "
                 <p> 
                <h4>Thank you for registering. Please click the button to continue</h4>
                                  <a href='index.html'><b>
                    <button type='button' class='btn btn-success btn-lg'>CONTINUE</button>
                    </b>
                     </a></p>
                
                ";
            }
         else
            {
             echo 
                "
                    <p>
                    <h4>
                        Username already taken! Please try again.
                    </h4>
                    <a href='register.php'><b>
                    <button type='button' class='btn btn-danger btn-lg'>TRY AGAIN</button>
                    </b>
                     </a>
                    </p>
                ";
             $valid = 0;
            }
         }
// If unable to connect to server page will
// display warning letting user know
else
{
    echo "
    Error connecting to server
    ";
}
?>                      <!--
         User:<?=$username?>
         Pw:<?=$password?>
         Cpw:<?=$cpassword?>
         Fn:<?=$fName?>
         Ln:<?=$lName?> -->
              
                            

<!--                                <div>-->
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:3px; font-size:85%" >
                                            <h4><b>Already have an account? </b> 
                                        <a href="./login.php" style="color: rgb(0,100,255)">
                                            Sign In Here
                                        </a></h4>
                                        </div>
                                    </div>
<!--                                </div>     -->

                        </div>                     
                    </div>  
        </div>
        
    </div>
            
    
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
<?php
  $db->close();

  function mysql_entities_fix_string($db, $string)
  {
    return htmlentities(mysql_fix_string($db, $string));
  }	

  function mysql_fix_string($db, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $db->real_escape_string($string);
  }
  function add_user($db, $fn, $sn, $un, $pw)
  {
    $query  = "INSERT INTO USERS VALUES('$fn', '$sn', '$un', '$pw')";
    $result = $db->query($query);
    if (!$result) die($db->error);
  }
?>
