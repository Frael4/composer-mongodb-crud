<?php
namespace Frael\ComposerMongoMongodb;

use Conexion;
use MongoDB\BSON\ObjectId;

class Libro {
    
    private static $collection;

    public function __construct()
    {
        $this->collection = Conexion::getComposerMongoDB()->libros;
    }

    public static function getLibros()
    {
        return self::$collection->find();
    }
}