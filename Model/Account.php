<?php
    class Account {
        private $accountId; //id for user account
        private $email; //email for user account
        private $username; //username for user account    
        private $user_password; //password for user account


        function __get($name) {
            return $this->$name;
        }//end function to get attribute
        function __set($name, $value) {
            $this->$name = $value;
        }//end function to set attribute
        
    } //end class for Account 
?>