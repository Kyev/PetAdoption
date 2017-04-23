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
    }


/*INSERT INTO `PETS` (`pid`, `pName`, `pBreed`, `pType`, `pSex`, `pStatus`, `pDescription`, `pSize`) VALUES (NULL, 'Luke', 'Kylo', 'Dog', 'Male', 'Available', 'Random fits of rage.', 'Small');*/














//clientregister in create account sequence diagram
//reservepet in reservation 'createpetreservation' too in reservation sequence diagram