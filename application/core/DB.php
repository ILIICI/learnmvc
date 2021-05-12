<?php
namespace application\core;
private $localhost = "localhost";
private $dbname = "ammb";
private $user ="user";
private $pass ="1";

class DB {
    public function __construct(){
        try {
            $dbh = new PDO('mysql:host='.$this->localhost.';dbname='.$this->dbname.','$this->user, $this->pass);
            if($dhb){
                echo "Connected";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}


?>