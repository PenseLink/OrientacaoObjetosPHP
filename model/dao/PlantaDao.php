<?php

include 'connectionFactory.php';
//include '../entity/Planta.php';

class PlantaDao {
    
    public function adcionar($planta){        
        //escreva o método para adicionar a planta no banco        
        $db = connectionFactory::getConnection();
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

