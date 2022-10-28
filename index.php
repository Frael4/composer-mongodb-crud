<?php
require_once './vendor/autoload.php';
require_once './src/config/database.php';




$cliente = $collection->findOne(array( "_id" => new ObjectId('635955d86e5a286257a842a8')));

var_dump($cliente);