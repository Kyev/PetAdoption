<?php


//Declare a Class object
class Pet {
    
    //Properties
    var $ID;
    var $Name;
    var $Status;
    var $Type;
    var $Size;
    
    //Create an animal Object
    var $Animal = new Animal();

    //Methods
    function add(){
        
    }
    
    function remove($petID){
            $_SESSION['admin'] = TRUE; // Remove this later
        
            // Handles the deletion process when user
            // clicks the delete button on an image
            // Will only delete the image if 
            // if user has admin privileges 
            if(isset($petID)
            {
                
                
                $idToDelete = $petID;
                //echo " ID to delete is $idToDelete";
                $imageFind  = "SELECT * FROM PETS WHERE petID = $idToDelete";
                $imageInfo = $db->query($imageFind);
                

                if(!$image = $db->query($imageFind))
                {
                    die('There was an error running the query');
                }


                if ($_SESSION['admin'] == TRUE)
                {
                    $delete = "DELETE FROM PETS WHERE 
                    petID = $idToDelete";
                    if(!$imageremoval = $db->query($delete))
                    {
                        die('There was an error running the query');
                    }
                    $imageremoval = $db->query($imageFind);
                    echo
                    "
                        <script>
                            function myFunction() {
                            alert('Pet was succesfully deleted!');
                            }
                        </script>
                    ";    
                }
                else
                {
                    echo 
                    "
                        <script>
                            function myFunction() {
                            alert('Error deleting pet!');
                            }
                        </script>
                    ";    
                }  
            }
    }
    
    function getPet(){
        //output pet information based off variables sent
    }
}

//The extended or derived class has all variables and functions of the base class - Inheritance
class Animal extends Pet {
    var $Gender;
    var $Price;

    function getInfo(){
        //output gender and price
    }
}

function browse(){
    
    var $pet=new Pet();
    
    //request the info
    $pet->getpet(type,size);
}

?>
