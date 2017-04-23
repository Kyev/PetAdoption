<?php
    include 'dbh.inc.php';
    include 'pet.inc.php';
    include 'showpets.inc.php';
    include 'addpets.php';
?>

<!DOCTYPE html>
<html lang='en-US'>
<header>
    <meta charset='UTF-8'>
    <title>Pet</title>
</header>
<body>
    <!--<h1>Add Pet</h1>
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
            <select name="status">
                <option value="Available">Available</option>
                <option value="Reserved">Reserved</option>
            </select>
     
            <input type="text" name="description" placeholder="Pet descprition">
          
            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>-->
        
    <h1>Search Pet</h1>
    <div>
        <form method="POST">
            <select name="type">
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
            </select>
            <!--<select name="breed">
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
            </select>-->
            <button type="submit" name="search">Search</button>
        </form>
    </div>
    
 
    <?php
        /*
        $name = $_POST['name'];
        $type = $_POST['type']; 
        $breed = $_POST['breed'];
        $sex = $_POST['sex'];
        $description = $_POST['description'];
        $size = $_POST['size'];
        $status = $_POST['status'];
    
        $add = new Pet();    
        $add->addPet($name, $breed, $type, $sex, $size, $status, $description);*/
    
        $type = $_POST['type'];
        
        $search = new Pet();
        $search->getPets($type);

    ?>

 
</body>
</html>













<!--INSERT INTO `PETS` (`pid`, `pName`, `pBreed`, `pType`, `pSex`, `pStatus`, `pDescription`, `pSize`) VALUES (NULL, 'Luke', 'Kylo', 'Dog', 'Male', 'Available', 'Random fits of rage.', 'Small');-->
