<?php

use Frael\ComposerMongoMongodb\Libro;

class LibroController
{

    private static $model;

    public function __construct()
    {
        self::$model = new Libro();
    }

    public static function registro()
    {
        /* print_r($libros); */
        include_once './src/views/libro/libro.php';
    }

    public static function setLibro()
    {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $autor = $_POST['autor'];
        $fecha = $_POST['fecha'];

        $new = self::$model->setLibro(
            array(
                "nombre" => $nombre,
                "precio" => $precio,
                "descripcion" => $descripcion,
                "autor" => $autor,
                "fecha" => $fecha
            )
        );

        if ($new != null) {
            header('Location: ./index?c=Libro');
        }
        //var_dump($new);
       /*  include('./src/views/libro/libro.php'); */
    }

    public static function getLibros()
    {
        $libros = self::$model->getLibros();
        include('./src/views/libro/listadoLibros.php');
    }

    //Editar
    public static function deleteLibro()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        /* $res = self::$model::deleteLibro(); */
    }
}
