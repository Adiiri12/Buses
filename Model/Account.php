<?php
    class Account {
        private $accountId;
        private $email;
        private $username;       
        private $user_password;


        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>