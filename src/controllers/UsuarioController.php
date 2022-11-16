<?php

use Frael\ComposerMongoMongodb\Usuario;

class UsuarioController
{

    private $model;

    public function __construct()
    {
        $this->model = new Usuario();
    }

    public function registro()
    {
        include_once './src/views/usuario/usuario.php';
    }

    public function setUsuario()
    {
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_type = $_FILES['foto']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['foto']['name'])));

        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $new = $this->model->setUsuario(
            array(
                "nombre" => $nombre,
                "correo" => $correo,
                "contraseña" => $contraseña,
                "foto" => array(
                    "file_name" => $file_name,
                    "file_size" => $file_size,
                    "file_tmp" => $file_tmp,
                    "file_type" => $file_type
                )
            )
        );

        var_dump($new);
    }

    public function getUsuarios()
    {
        $usuarios = $this->model->getUsuarios();
        /* print_r($usuarios); */
        include_once './src/views/usuario/lista.php';
    }
}
