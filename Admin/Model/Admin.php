<?php
    class Admin {
        private $admin_id;
        private $username;
        private $user_password;
        private $admin_name;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>