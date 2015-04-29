<?php
require 'http://localhost/PhpProject1/model/entity/Planta.php';
include 'http://localhost/PhpProject1/model/connectionFactory.php';


class PlantaDao {
  
    public function adcionar($planta){        
        //escreva o método para adicionar a planta no banco        
        $db = connectionFactory::getConnection();
        //$query = 'INSERT INTO PLANTA (TIPO,IDADE,TAMANHO) VALUES ('.$planta->getTipo().','.$planta->getIdade().','.$planta->getTamanho().')';
        $query = 'INSERT INTO PLANTA (TIPO,IDADE,TAMANHO) VALUES ('.$planta->getTipo().','.$planta->getIdade().','.$planta->getTamanho().')';
        $db->query($query);
        var_dump($planta);
    }
    
    public function remover ($planta){
                
    }
    
    public function atualizar ($planta){
        
    }
    
    public function listar (){
        $db = connectionFactory::getConnection();
        $res = $db->query("Select*from planta");
        return $res;
    }
    
}