<?php

include '../model/entity/Planta.php';
//include '../model/dao/PlantaDao.php';
include '../model/connectionFactory.php';

$db = connectionFactory::getConnection();


//$plantaDao = new PlantaDao();
$planta = new Planta();
$planta->setIdade('30');
$planta->setTamanho('50');
$planta->setTipo('grande');
//$plantaDao->adcionar($planta);
$db->query("insert into planta (tipo, idade, tamanho) values (verde, 100, 50 metros)");