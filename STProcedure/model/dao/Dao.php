<?php

namespace model\dao;

use Exception;

class Dao {

    public function dbConnect(){
        try {
            $link = new \PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $link->exec("set names utf8");
            
        } catch (Exception $exc) {
            echo "Erro ao conectar com o Banco de Dados".$pe->getMessage();            
        }
        
        return $link;
        
        }
        
    public function dbCloseConnection($link) {
        
        mysqli_close($link) or die(mysqli_error($link));        
    }
    
    public function dbEscape($dados) {
        
        $link = $this->dbConnect();
        
        if(!is_array($dados)){
            $dados = mysqli_real_escape_string($link, $dados);
        }else{
            $arr = $dados;
            
            foreach($arr as $key => $value){
                $key = mysqli_real_escape_string($link, $key);
                $value = mysqli_real_escape_string($link, $value);
                
                $dados[$key] = $value;
            }
        }
        dbCloseConnection($link);
        
        return $dados;
    }
    
}
