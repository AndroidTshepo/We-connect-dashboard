<?php

class connection{
//set timezone
    //date_default_timezone_set('Europe/London');
    var $db;


        //database credentials
            private $DBHOST='localhost';
            private $DBUSER='root';
            private $DBPASS ='';
            private $DBNAME = 'we_connect';

            //application address
            private $DIR = 'http://domain.com/';
            private $SITEEMAIL='noreply@domain.com';
    
    public function __construct(){

    try {

//create PDO connection 
    $this->db = new PDO("mysql:host=".$this->DBHOST.";dbname=".$this->DBNAME, $this->DBUSER, $this->DBPASS);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        } catch(PDOException $e) {
//show error
        echo $dberror = $e->getMessage();
        exit;
        }
    }    
    
}
?>