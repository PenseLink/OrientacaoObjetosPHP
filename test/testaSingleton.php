<?php

include_once '../model/entity/Planta.php';
include_once '../model/dao/PlantaDao.php';

$planta = new Planta();
$plantaDao = new PlantaDao();

$planta->setIdade('30');
$planta->setTamanho('50');
$planta->setTipo('grande');

$plantaDao->adcionar($planta);