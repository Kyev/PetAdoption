<?php
//require_once './php/db_connect.php';
// ini_set('display_errors', '1');
//error_reporting(0);
include 'user.inc.php';
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
            <li><a href="html/login.html">Login</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>


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
                            
                        <form id="signupform" method = "post" action = "register.php" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                        <input id="signup-username" type="text" class="form-control" name="userName" value="Username" placeholder="User Name">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="signup-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="signup-passwordconfirm" type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                    <input id="signup-password" type="text" class="form-control" name="email" placeholder="Email">
                                                                </div>

                            
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input id="btn-login" value="Register" class="btn btn-success" type="submit">
                                    </div>
                                </div>


                                <div>
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:3px; font-size:85%" >
                                            <h4><b>Already have an account? </b> 
                                        <a href="./login.php" style="color: rgb(0,100,255)">
                                            Sign In Here
                                        </a></h4>
                                        </div>
                                    </div>
                                </div>    
                            </form>

                                <?php
                                if (isset($_POST['userName']))
                                $userName = $_POST['userName'];
                                if (isset($_POST['address']))
                                $address = $_POST['address'];
                                if (isset($_POST['password']))
                                $password = $_POST['password'];
                                if (isset($_POST['email']))
                                $email = $_POST['email'];
                                
                                if (isset($_POST['userName']))
                                {
                                $addUser = new Customer();
                                $addUser->registerCustomer($userName, $address, $password, $email);
                                }
                                ?>

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
