<?php


$path = dirname($_SERVER['PHP_SELF']);
$position = strrpos($path,'/') + 1;
$localDir = substr($path,$position);


unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/ignacio/';
$config->url = 'http://'.$_SERVER['HTTP_HOST']. $config->base_url;
$config->asset = $config->base_url . 'view/templates/';
$config->template = 'default';

if ($_SERVER['HTTP_HOST'] === "localhost" || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $config->dbuser = 'root'; 
    $config->dbpassword = ''; 
    $config->dbname = 'dawii'; 
    $config->dbhost = '127.0.0.1'; 
    $config->dbdrive = 'mysql'; 
} 
