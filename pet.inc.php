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
         
        /*function getPets () {
            $sql = "SELECT * FROM Pets";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }*/
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
                    echo '<img src="../img/malt.jpg" alt="Mewy Pawpins" />';
                    
                    
                echo '</div>
            <h1>'.$datas['pName'].'<span>'.$datas['pBreed'].'</span></h1>
          </div>
        </header>
        <div class="profile-card_about">
          <h2>'.$datas['pSex'].'</h2>
          <p>'.$datas['pDescription'].'</p>
          <input type="button" class="btn btn-default center-block" value="Reserve">';    
         //closing brackets           
        echo '</div></div></div>';
                    
                /*echo $datas['pName'];
                echo $datas['pType'];
                echo $datas['pSex'];
                echo $datas['pSize'];
                echo $datas['pBreed'];*/
                }
                echo '</div></div>';
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
            
            $sql = "INSERT INTO PETS (pName, pBreed, pType, pSex, pSize, pStatus, pDescription) VALUES ('$this->pName', '$this->pBreed', '$this->pType', '$this->pSex', '$this->pSize', '$this->pStatus', '$this->pDescription')";
            $this->connect()->query($sql);
        }
        
        function deletePet($pID){
            //$_SESSION['admin'] = TRUE;
        
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
                
                if ($_SESSION['admin'] == TRUE)
                {
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
                else
                {
                    echo
                    "<script type='text/javascript'>alert('PetID $pID was NOT deleted');</script>
                    ";    
                }  
            }
        }
}

?>

