<?php

use Frael\ComposerMongoMongodb\Libro;

class LibroController {
    
    private static $model;

    public function __construct()
    {
        self::$model = new Libro();
    }

    public static function registro()
    {
        /* print_r($libros); */
        include_once './src/views/index.php';
    }

    public static function setLibro()
    {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $autor = $_POST['autor'];
        $fecha = $_POST['fecha'];
                                        //  0   1   2   3   4  ->ID
        /* $new = self::$model->setLibro(array($nombre, $precio, $descripcion, $autor, $fecha)) */
        $new = self::$model->setLibro(array(
            "nombre" => $nombre,
            "precio" => $precio,
            "descripcion" => $descripcion,
            "autor" => $autor,
            "fecha" => $fecha)
        );

        if($new != null){
            header('./index?c=Libro');
        }
        /* var_dump($new) ; */
    }

    public static function getLibros()
    {
        $libros = self::$model->getLibros();
        include ('./src/views/listadoLibros.php');
    }

    public static function deleteLibro()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        /* $res = self::$model::deleteLibro(); */
    }
}