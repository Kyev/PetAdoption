<?php
include 'dbh.inc.php';

    class Pet extends Dbh{
        private $pName;
        private $pType;
        private $pBreed;
        private $pSex;
        private $pSize;
        private $pStatus;
        private $pDescription;
        private $pImg;
        private $petid;
         
        public function getPets($type){
            $sql = "SELECT * FROM PETS WHERE pType ='$type'";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                echo '<div class="container"><div class="row">';
                foreach ($data as $datas) {
                    //opening container
                    echo '<div class="col-sm-4">
                              <div class="side_wrapper">
                                <header class="profile-card_header">
                                  <div class="profile-card_header-container">
                                    <div class="profile-card_header-imgbox">'; //end of opening container
                    //Get Image
                    echo '<img src="../img/'.$datas['pImg'].'" alt="'.$datas['pImg'].'" />';
                echo '</div>
            <h1>'.$datas['pName'].'<span>'.$datas['pBreed'].'</span></h1>
          </div>
        </header>
        <div class="profile-card_about">
          <h2>'.$datas['pSex'].'</h2>
          <p>'.$datas['pDescription'].'</p>';
                if($datas['pStatus'] > 0){
                    echo '<input type="button" class="btn btn-default center-block" value="RESERVED" style="background-color: #f44336">';
                } else{
                    echo '<form method="POST" name="delete"><button type="submit" class="btn btn-default center-block" name="animalReserve" value="'.$datas['pID'].'" style="background-color: #4caf50">Reserve</button></form>';;
                }
         //closing brackets           
        echo '</div></div></div>';
                }
                echo '</div></div>';
            }
        }
        
        
        
        public function reservePet($id){
            $pid = $_POST['animalReserve'];   
            $sql = "UPDATE PETS SET pStatus = '1' where pID = $pid";
            $petReserve = $this->connect()->query($sql);
            echo '<script type="text/javascript">alert("Pet was succesfully reserved");</script>';
            
        }
        
        public function addPet($name, $breed, $type, $sex, $size, $description, $pImg){

        public function addPet($name, $breed, $type, $sex, $size, $description, $image){

            $this->pName = $name;
            $this->pBreed = $breed;
            $this->pType = $type;
            $this->pSex = $sex;
            $this->pSize = $size;
            $this->pStatus = 0;
            $this->pDescription = $description;
            $this->pImg = $image;
            
            $sql = "INSERT INTO PETS (pName, pBreed, pType, pSex, pSize, pStatus, pDescription, pImg) VALUES ('$this->pName', '$this->pBreed', '$this->pType', '$this->pSex', '$this->pSize', '$this->pStatus', '$this->pDescription', '$this->pImg')";
            $this->connect()->query($sql);
            echo'<script type="text/javascript">alert("Pet successfully added!");</script>';
        }
        
        public function getAllPets(){
            $sql = "SELECT * FROM PETS";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                echo '<div class="container"><div class="row">';
                foreach ($data as $datas) {
                    //opening container
                    echo '<div class="col-sm-4">
                              <div class="side_wrapper">
                                <header class="profile-card_header">
                                  <div class="profile-card_header-container">
                                    <div class="profile-card_header-imgbox">'; //end of opening container
                    //Get Image
                    echo '<img src="../img/'.$datas['pImg'].'" alt="'.$datas['pImg'].'" />';
                echo '</div>
            <h1>'.$datas['pName'].'<span>'.$datas['pBreed'].'</span></h1>
          </div>
        </header>
        <div class="profile-card_about">
          <h2>'.$datas['pSex'].'</h2>
          <p>'.$datas['pDescription'].'</p>';
                    $this->petid = $datas['pID'];
                    echo '<form method="POST" name="delete"><button type="submit" class="btn btn-default center-block" name="delete" value="'.$datas['pID'].'" style="background-color: #FFFFFF">DELETE</button></form>';
         //closing brackets           
        echo '</div></div></div>';
                }
                echo '</div></div>';
            }
        }
        
        function deletePet($pID){
            
        
            // Handles the deletion process when user
            // clicks the delete button on an pet
            // Will only delete the pet if 
            // if user has admin privileges 
            if(isset($pID))
            {
                $idToDelete = $pID;
                //echo " ID to delete is $idToDelete";
                $petFind  = "SELECT * FROM PETS WHERE pID = $idToDelete";
                $petInfo = $this->connect()->query($petFind);
                
                if(!$pet = $this->connect()->query($petFind))
                {
                    die('There was an error running the query');
                }
                
                    $delete = "DELETE FROM PETS WHERE 
                    pID = $idToDelete";
                    if(!$petremoval = $this->connect()->query($delete))
                    {
                        die('There was an error running the query');
                    }
                    $petremoval = $this->connect()->query($delete);
                    echo'<script type="text/javascript">alert("Pet was succesfully deleted");</script>
                    ';    
            }
        }
}

?>

