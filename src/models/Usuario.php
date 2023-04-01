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
            $new = self::$collection->insertOne($params);

            return $new;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public static function getUsuarios()
    {
        try {
            $usuarios = self::$collection->find();
            return $usuarios;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }


    public function getImagen($id_documento)
    {
        // Realiza una consulta a la base de datos para obtener el documento que contiene la imagen
        $documento = self::$collection->findOne(array('_id' => $id_documento));
        /* var_dump($documento->foto['imagen']); */
        // Verifica si se encontró el documento y si contiene la imagen
        if ($documento && isset($documento->foto['imagen'])) {
            // Establece el tipo de contenido de la respuesta como imagen JPEG
            header('Content-Type: image/jpeg');

            // Imprime el contenido de la imagen
            return $documento->foto['imagen']->getData();
        } else {
            // Si el documento no se encuentra o no contiene la imagen, muestra un mensaje de error
            return "La imagen no se ha encontrado";
        }
    }

    //Retorna el usuario
    public function getUsuario($id_user)
    {
        try {
            return self::$collection->findOne(array('_id' => $id_user));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function editUsuario($id_user, $user){

        try {
            return self::$collection->findOneAndUpdate(
                array('_id' => $id_user),
                array('$set' => $user)
            );
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
