<?php
    class Admin {
        private $admin_id;
<<<<<<< HEAD
        private $email_address;
=======
>>>>>>> 568ba6872863a56fbc980df47582b63fe699af80
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