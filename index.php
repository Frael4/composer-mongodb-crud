<?php
//$mongodbVersion = phpversion('mongodb');
header("Access-Control-Allow-Origin: *"); //permite peticiones desde js
//error_reporting(0); // 0 = no muestra advertencias
require_once './vendor/autoload.php';
require_once './src/config/database.php';


$clase = $_GET['c'];
$metodo = $_GET['m'];

if (!isset($clase)) {
    $clase = 'Usuario';
}

$fileController = './src/controllers/' . $clase . 'Controller.php';
$fileModel = './src/models/' . $clase . '.php';
$claseController = $clase . 'Controller';

require $fileModel;
require $fileController;

$objeto =  new $claseController;

if (!isset($metodo)) {
    $objeto->registro();
} else {
    call_user_func(array($objeto, $metodo));
}
