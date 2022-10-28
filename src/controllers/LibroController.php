<?php

use Frael\ComposerMongoMongodb\Libro;

class LibroController {
    
    private static $model;

    public function __construct()
    {
        self::$model = new Libro();
    }

    public function index()
    {
        $libros = self::$model::getLibros();
        include_once '';
    }
}