<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connectionFactory
 *
 * @author user62
 */
class connectionFactory extends mysqli {

    private $host = 'localhost';
    private $user = 'root';
    private $pw = '';
    private $db = 'floresta';
    private static $connection = null;

    function __construct() {
        try {
            parent::__construct($this->host, $this->user, $this->pw, $this->db);
            echo 'Conectado com sucesso';
        } catch (Exception $ex) {
            echo 'Erro ao criar a conexão ' . $ex;
        }
    }

    public static function getConnection() {

        if (self::$connection == null) {
            self::$connection = new self ();
        }
        return self::$connection;
    }

}

