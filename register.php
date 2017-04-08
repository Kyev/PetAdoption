<?php
//require_once './php/db_connect.php';
// ini_set('display_errors', '1');
error_reporting(0);
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
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="header">
    <div class="container">
      <ul>
        <li class="main">Pets'R'Us</li>
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
                            
                        <form id="signupform" method = "post" action = "postregister.php" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                                        <input id="signup-firstname" type="text" class="form-control" name="fName" value="" placeholder="First Name">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-bold"></i></span>
                                        <input id="signup-lastname" type="text" class="form-control" name="lName" placeholder="Last Name" value="">
                                    </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="signup-username" type="text" class="form-control" name="username" value="" placeholder="Username">                                        
                                    </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="signup-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="signup-passwordconfirm" type="password" class="form-control" name="cpw" placeholder="Confirm Password">
                            </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type='text' class="form-control" placeholder="Date of Birth" id="dob">
                                    <script type="text/javascript">
                                        $(function () {
                                        $('input[name="daterange"]').daterangepicker();
                                        });
                                    </script>
                            </div>
                            
 
                            <div style="margin-bottom: 25px" class="input-group">
                                
                            <span class="input-group-addon"><i class="glyphicon glyphicon-glass"></i>Do you drink butter?</span>

                                        <select id="info_type" class="form-control">
                                            <option> </option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>What?</option>
                                        </select>
                                    
                            </div>       
                            
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i>Do you drink butter?</span>

                                        <select id="info_type" class="form-control">
                                            <option> </option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>What?</option>
                                        </select>
                                    
                            </div>   
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                
                            <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i>Do you drink butter?</span>

                                        <select id="info_type" class="form-control">
                                            <option> </option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>What?</option>
                                        </select>
                                    
                            </div>   
                            
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i>Do you drink butter?</span>

                                        <select id="info_type" class="form-control">
                                            <option> </option>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>What?</option>
                                        </select>
                                    
                            </div> 
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="signup-username" type="text" class="form-control" name="phone" value="" placeholder="Phone Number">                                        
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
