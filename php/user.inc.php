<?php
    class Customer extends Dbh{
        private $puserName;
        private $paddress;
        private $ppassword;
        private $pemail;

        protected function getCustomer () {
            $sql = "SELECT * FROM CUSTOMER";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }

        public function registerCustomer($userName, $address, $password, $email){
            $this->puserName = $userName;
            $this->paddress = $address;
            $this->ppassword = $password;
            $this->pemail = $email;

            $sql = "INSERT INTO CUSTOMER (userName, address, password, email) VALUES ('$this->puserName', '$this->paddress', '$this->ppassword', '$this->pemail')";
            $this->connect()->query($sql);
        }
    }