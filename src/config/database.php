<?php

use MongoDB\Client;

class Conexion
{

    private static $conexion;

    public static function getComposerMongoDB()
    {
        self::$conexion = new Client('mongodb://localhost:27017');
        return self::$conexion->composer_mongo_mongodb;
    }
}
