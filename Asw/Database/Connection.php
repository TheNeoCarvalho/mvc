<?php

namespace Asw\Database;

use PDO;

class Connection {
   
    const DADOS = '../config/database.ini';
    
    private $dados;
   
    public function __construct() {
        $this->dados = parse_ini_file(self::DADOS);
    }

    public function connection(){
        
        try{
            
            $con = new PDO($this->dados['driver'].
                    ":host=".$this->dados['host'].
                    ";dbname=".$this->dados['banco']
                    ,$this->dados['user']
                    ,$this->dados['pass']); 
            
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
            return $con;
            
        } catch (PDOException $e){
            
            echo $e->getMessage();
            
        }
        
    }       
}