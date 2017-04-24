<?php
include 'dbh.inc.php';

    class Customer extends Dbh{
        private $cUName;
        private $cAddress;
        private $cPassword;
        private $cEmail;

        /*protected function getCustomer(){
            $sql = "SELECT * FROM CUSTOMER";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            if($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }*/

        public function registerCustomer($userName, $address, $password, $email){
            $this->cUName = $userName;
            $this->cAddress = $address;
            $this->cPassword = $password;
            $this->cEmail = $email;
          
            $sql = "INSERT INTO CUSTOMERS (cUName, cAddress, cPassword, cEmail) VALUES ('$this->cUName', '$this->cAddress', '$this->cPassword', '$this->cEmail')";
            $this->connect()->query($sql);
            echo'<script type="text/javascript">alert("Account successfully created!");</script>
                    ';
        }
    }