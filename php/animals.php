<!-- Include PHPs -->
<?php
    include 'pet.inc.php';
    session_start();
    $_SESSION['animal']="";
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
                <a href="../index.html"><img src="../img/Pets_R_Us_sml.png" alt="Logo" id="logo"></a>
            </li>
            <li><a href="animals.php">Animals</a></li>
            <li><a href="../php/register.php">Register</a></li>
            <li><a href="../html/login.html">Login</a></li>
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

        
        <div class="col-sm-4">

        <!-- CAT SECTION -->   

            <div class="side_wrapper">
                <header class="profile-card_header">
                    <img src="../img/cat.png" alt="Cats" />
                </header>
                <div class="profile-card_about">
                    <form action="../php/showpets2.php" method="POST">
                        <button type="submit" class="btn btn-success center-block" value="Cat" name="animalSubmit">VIEW CATS</button>
                    </form>
                </div>
            </div>

        <!-- END CAT SECTION -->

        <!-- DOG SECTION -->

            <div class="side_wrapper">
                <header class="profile-card_header">
                    <img src="../img/dog.png" alt="Dogs" />
                </header>
                <div class="profile-card_about">
                    <form action="../php/showpets2.php" method="POST">
                        <button type="submit" class="btn btn-success center-block" value="Dog" name="animalSubmit">VIEW DOGS</button>
                    </form>
                </div>
            </div>

        <!-- END DOG SECTION -->

        </div>

       

    </div>
</div>

<div class="footer">
    <div class="copy">© Pets'R'Us</div>
</div>
    
</body>
</html>