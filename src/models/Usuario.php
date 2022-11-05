<?php

namespace Frael\ComposerMongoMongodb;

use Conexion;

class Usuario
{

    private static $collection;

    public function __construct()
    {
        self::$collection = Conexion::getComposerMongoDB()->usuario;
    }

    public static function setUsuario($params)
    {
        try {
            $new = self::$collection->insertOne(
                /* array(
                    "nombre" => $params['nombre'],
                    "correo" => $params['correo'],
                    "contraseña" => $params['contraseña'],
                    "foto" => $params['foto']
                ) */
                $params
            );

            return $new;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public static function getUsuarios()
    {
        try{

            $usuarios = self::$collection->find();
            return $usuarios;

        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }
}
