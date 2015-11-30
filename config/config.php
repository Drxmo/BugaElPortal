<?php

use FStudio\myConfig as config;

$config = new config();

//$config->setPath('/var/www/html/teamPortal/');
$config->setPath('C:/wamp/www/destinoTravel/');
$config->setUrl('http://localhost/destinoTravel/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('usuarios');
$config->setUser('root');
$config->setPassword('1321245');
$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ';port=' . $config->getPort()
        . ';dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('home');
$config->setDefaultAction('index');

//$config->setPlugins(array(
//    'fsEjemplo1Plugin',
//    'fsEjemplo2Plugin',
//));
