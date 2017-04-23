<?php
    class Dbh {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        
        protected function connect(){
            $this->servername = "localhost";
            $this->username = "jfonte1";
            $this->password = "8gpxBSgeDK";
            $this->dbname = "jfonte1";
            
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            return $conn;
        }
    }