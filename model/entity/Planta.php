<?php

class Planta {

    private $id;
    private $tipo;
    private $idade;
    private $tamanho;
    
    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getTamanho() {
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
