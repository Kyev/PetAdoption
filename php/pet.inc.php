<?php
    class Pet extends Dbh{
        private $pName;
        private $pType;
        private $pBreed;
        private $pSex;
        private $pSize;
        private $pStatus;
        private $pDescription;
         
        public function getPets($type){
            $sql = "SELECT * FROM PETS WHERE pType ='$type'";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                foreach ($data as $datas) {
                echo $datas['pName'];
                echo $datas['pType'];
                echo $datas['pSex'];
                echo $datas['petSize'];
                }
                //return $data;
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
            
            $sql = "INSERT INTO PETS (pName, pBreed, pType, pSex, pSize, pStatus, pDescription) VALUES ('$this->pName', '$this->pBreed', '$this->pType', '$this->pSex', '$this->pSize', '0', '$this->pDescription')";
            $this->connect()->query($sql);
        }
    }


/*INSERT INTO `PETS` (`pid`, `pName`, `pBreed`, `pType`, `pSex`, `pStatus`, `pDescription`, `pSize`) VALUES (NULL, 'Luke', 'Kylo', 'Dog', 'Male', 'Available', 'Random fits of rage.', 'Small');*/














//clientregister in create account sequence diagram
//reservepet in reservation 'createpetreservation' too in reservation sequence diagram