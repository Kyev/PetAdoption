<?php
    class ShowPets extends Pet{
        
        public function showPets () {
            $datas = $this->getPets();
            foreach ($datas as $data) {
                echo $data['petName'];
                echo $data['petType'];
                echo $data['petSize'];
                echo $data['petSex'];
            }
        }
    }