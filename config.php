<?php
require 'environment.php';

define ("BASE_URL","http://localhost/projetox");

global $config;
$config = array(); 
if(ENVIRONMENT == "development") {
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else{
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

?>