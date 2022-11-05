<?php

namespace Frael\ComposerMongoMongodb;

use DateTime;
use Conexion;
use Exception;
use MongoDB\BSON\ObjectId;
use MongoDB\BSON\UTCDateTime;

class Libro
{

    private static $collection;

    public function __construct()
    {
        self::$collection = Conexion::getComposerMongoDB()->libro;
        /* $this->$collection = Conexion::getComposerMongoDB()->libro;  */ // No usar this en cons si es statico
    }

    public static function getLibros()
    {
        $libros = self::$collection->find();
        return ($libros);
    }

    public static function setLibro($params)
    {
        try {
            
            $fecha = new DateTime($params['fecha']); //CInicializa php DateTime
            $fecha = new UTCDateTime($fecha->getTimestamp()*1000);// Se pasa el timestamp
            
            $new = self::$collection->insertOne(
                array(
                    'nombre' => $params['nombre'],
                    'precio' => intval($params['precio']),// 😒 no me dejaba porque tambien estaba validado
                    'descripcion' => $params['descripcion'],
                    'autor' => $params['autor'],
                    'fecha' => $fecha // $fecha->toDateTime()
                )
            );

            /* $da = $fecha->toDateTime()->format(DATE_ISO8601);
            return $da; */
            return $new;
        } catch (\Throwable $er) {
            return $er->getMessage();
        }
    }
}
