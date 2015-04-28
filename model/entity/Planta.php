<?php

class Planta {

    private $id;
    private $tipo;
    private $idade;
    private $tamanho;
    
    function getId() {
        return $this->id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getIdade() {
        return $this->idade;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }
    
}
