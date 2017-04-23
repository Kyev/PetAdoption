<!-- Step 1: Connect to Database -->
<?php
require_once 'tabletest/php/db_connect.php';
?>
<!-- End Step 1 -->
<!-- Step 2: Create database for storing -->
<?php

$val = 'SELECT 1 FROM VOTE LIMIT 1';

if($db->query($val) == FALSE)
{ 
    $sql = 
        'CREATE TABLE VOTE
        (
        name varchar(255) NOT NULL,
        sex char(1) NOT NULL,
        count int(255) NOT NULL
        );';
    if(!$db->query($sql)){
        echo 'Table creation failed: ' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
        exit(); // Prevents the rest of the file from running
        }
}
?>
<!-- End Step 2 -->
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Vote for favorite Baby Names">
    <meta name="author" content="John Newman">
    <link rel="icon" href="../../favicon.ico">

    <title>Project 4</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
      
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project 4</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../">Home</a></li>
            <li><a href="../p1/">Project 1</a></li>
            <li><a href="../p2/">Project 2</a></li>
            <li><a href="../p3/">Project 3</a></li>
            <li class="active"><a href="#">Project 4</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1><br>Baby Names</h1>
        <p class="lead">Vote for your favorite baby name!</p>
          
          <form method="post" action="index.php">
          <label>Enter Name:</label>
          <input id="texty" type="text" name="name" placeholder="Joe"/>
          <br>
          <label> Sex:</label>
          <select class="styled-select black round" name="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
          <br>
          <input id="b_convert" type="submit" value="Vote!" />
        </form>
        </div>
</div><!-- /.container -->
 
<!-- Step 3: Transfer Data to Database -->
<?php
    $name = "";
    $sex = "";
    if (isset($_POST['name']))
    $name = $_POST['name'];
    if (isset($_POST['sex']))
    $sex= $_POST['sex'];
    
    $check ="SELECT name FROM VOTE WHERE name='$name' AND sex='$sex';";
    $result = $db->query($check);

    if($result->num_rows > 0)
    {
        $inc = "UPDATE VOTE SET count=count+1 WHERE name='$name' and sex='$sex';";
        $db->query($inc);
    } 
    else if($name!=""){
        $sql = "INSERT IGNORE INTO VOTE (name, sex, count) VALUES ('$_POST[name]', '$_POST[sex]', '1');";
        if(!$db->query($sql)){
            echo '        <div class="alert alert-danger">Inserting Data failed: (' . $db->errno . ') ' . $db->error . '</div>' . PHP_EOL;
            exit(); // Prevents the rest of the file from running
            }
        }
?>
<!-- End Step 3 -->

<!-- Step 4: Display the table's content -->
<?php
$sql = "SELECT name, sex, count FROM VOTE ORDER BY count DESC;";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container'><table><tr><th>Name</th><th>Sex</th><th>Votes</th><th>2014 Result</th></tr>";
    
        // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $cmp = "SELECT count FROM BABYNAMES WHERE name='".$row["name"]."' AND sex='".$row["sex"]."';";
        $value=$db->query($cmp);
        $row2=$value->fetch_assoc();
        
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["sex"]. "</td><td>" . $row["count"]. "</td><td>";
        if($row2["count"]>0)
            echo $row2["count"] . "</td></tr>";
        else
            echo 0 . "</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
?>

<?php
//Close connection
$db->close();
?>
<!-- End Step 4 -->
        
    <footer class="footer">
      <div class="container">
        <p>Created by John Newman</p>
        <p>For <a href="http://www.eng.fau.edu/directory/faculty/marques/">Dr. Oge Marques</a> COP3813 class at <a href="http://www.fau.edu/">Florida Atlantic University</a></p>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
  </body>
</html>