<?php
class Database{
    
    private $server = "mysql:host=kunet;dbname=dbAk1738426";
    private $user = "k1738426";
    private $pass = "harry";
    private $array = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    private static $instance = null; 

    private $con;
    
    public static function getInstance() { 
        if (self::$instance == null) { 
            self::$instance = new Database(); 
        } 

        return self::$instance; 
    } 
 

    private function __construct()
    {
        $this->con = new PDO($this->server, $this->user,$this->pass,$this->array);
    }
    
    public function openConnection()

    {
        return $this->con;
    }
}


?>