<?php
   class Customer {
       private $customer_id;
       private $username;
       private $password;
       private $email_address;
       private $company_name;
       private $customer_name;
       private $phone_number;
       private $address;

       function __get($name) {
           return $this->$name;
       }
       function __set($name, $value) {
           $this->$name = $value;
       }
       
   }
?>