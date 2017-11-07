<?php

namespace Asw\Database;

use Acme\Interfaces\Imodel;

class AswModel implements Imodel{
    
    private $database;
    
    function __construct() {

        $database = new Conection;

        $this->database = $database->connection();
        
    }
 
        public function read(){
            
            $sql = "SELECT * FROM $this->tabela";  
            $pdo = $this->database->prepare($sql);
            try{
                $pdo->execute();
                return $pdo->fetchAll();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        
        } 
    
    
} 




