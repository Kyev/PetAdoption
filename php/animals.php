<!-- Include PHPs -->
<?php
   include 'pet.inc.php';
?>
<!-- END INCLUDE PHP -->

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
<div class="header">
    <div class="container">
        <ul>
            <li class="main">
                <a href="#"><img src="../img/Pets_R_Us_sml.png" alt="Logo" id="logo"></a>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="animals.html">Animals</a></li>
            <li><a href="../php/register.php">Register</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </div>
</div>
<!--
< <div class="jumbotron">-->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="side_wrapper">
            </div>
        </div>

<?php
        session_start();
        $_SESSION['animal']="Cat";
?>
        
        
        <div class="col-sm-4">
        <!-- CAT SECTION -->
        <?php
            
            echo <<<END
<div class="side_wrapper">
<header class="profile-card_header">
<img src="../img/cat.png" alt="Cats" />
</header>
<div class="profile-card_about">
<form action="../php/showpets2.php">
<input type="submit" class="btn btn-success center-block" value="VIEW CATS">
</form>
</div>
</div>
END;
        ?>
        <!-- END CAT SECTION -->
            
        <!-- DOG SECTION -->
            <div class="side_wrapper">
                <header class="profile-card_header">
                    <img src="../img/dog.png" alt="Dogs" />
                </header>
                <div class="profile-card_about">
                    <input type="button" class="btn btn-success center-block" value="VIEW DOGS">
                </div>
            </div>
        <!-- END DOG SECTION -->
            
        </div>

        <div class="col-sm-4">
            <div class="side_wrapper">

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
