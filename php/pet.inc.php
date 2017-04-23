<?php
    class Pet extends Dbh{
        private $pName;
        private $pType;
        private $pBreed;
        private $pSex;
        private $pSize;
        private $pStatus;
        private $pDescription;
         
        protected function getPets () {
            $sql = "SELECT * FROM Pets";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }
        
        public function addPet($name, $breed, $type, $sex, $size, $status, $description){
            $this->pName = $name;
            $this->pBreed = $breed;
            $this->pType = $type;
            $this->pSex = $sex;
            $this->pSize = $size;
            $this->pStatus = $status;
            $this->pDescription = $description;
            
            $sql = "INSERT INTO PETS (pName, pBreed, pType, pSex, pSize, pStatus, pDescription) VALUES ('$this->pName', '$this->pBreed', '$this->pType', '$this->pSex', '$this->pSize', '$this->pStatus', '$this->pDescription')";
            $this->connect()->query($sql);
        }
        
        function deletePet($petID){
            $_SESSION['admin'] = TRUE; // Remove this later
        
            // Handles the deletion process when user
            // clicks the delete button on an pet
            // Will only delete the pet if 
            // if user has admin privileges 
            if(isset($petID))
            {
                
                
                $idToDelete = $petID;
                //echo " ID to delete is $idToDelete";
                $pet  = "SELECT * FROM PETS WHERE petID = $idToDelete";
                $petInfo = $db->query($petFind);
                
                if(!$pet = $db->query($petFind))
                {
                    die('There was an error running the query');
                }
                
                if ($_SESSION['admin'] == TRUE)
                {
                    $delete = "DELETE FROM PETS WHERE 
                    petID = $idToDelete";
                    if(!$petremoval = $db->query($delete))
                    {
                        die('There was an error running the query');
                    }
                    $petremoval = $db->query($petFind);
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
    }


/*INSERT INTO `PETS` (`pid`, `pName`, `pBreed`, `pType`, `pSex`, `pStatus`, `pDescription`, `pSize`) VALUES (NULL, 'Luke', 'Kylo', 'Dog', 'Male', 'Available', 'Random fits of rage.', 'Small');*/














//clientregister in create account sequence diagram
//reservepet in reservation 'createpetreservation' too in reservation sequence diagram
