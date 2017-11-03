<?php
namespace Asw\Database;
use \PDO;
class Conection {
    const DADOS = '../Config/Database.ini';
        private $dados;
    public function __construct() {
        $this->dados = parse_ini_file(self::DADOS);

        $con = new PDO ($this->dados['driver'].
                ':host='.$this->dados['host'].
                ';dbname='.$this->dados['banco'].
                ';charset=UTF-8', 
                $this->dados['user'],
                $this->dados['pass']);
        
        return $con;
        
    }       
}