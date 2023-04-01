<?php

use Frael\ComposerMongoMongodb\Usuario;
use MongoDB\BSON\Binary;
use MongoDB\BSON\ObjectID;
use MongoDB\BSON\Unserializable;

class UsuarioController
{

    private $model;

    public function __construct()
    {
        $this->model = new Usuario();
    }

    //Muestra vista registro
    public function registro()
    {
        include_once './src/views/usuario/usuario.php';
    }

    // Ruta actualizadora
    public function setUsuario()
    {
        // Obtener las propiedades del archivo
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_type = $_FILES['foto']['type'];
        //file_get_contents() es una función útil en PHP para leer el contenido de archivos,
        // incluyendo imágenes, y obtenerlo como una cadena para utilizarlo en diferentes situaciones, 
        //como mostrar imágenes en una página web o procesar archivos binarios en una aplicación
        $contenido_bytes = '';
        if ($file_tmp != '') {
            $contenido_bytes = file_get_contents($file_tmp);
            $tmp = explode('.', $file_name);
            $file_ext = strtolower(end($tmp));

            $expensions = array("jpeg", "jpg", "png");
            // Validacion
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
        }

        $newUsuario = array(
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "usuario" => $_POST['usuario'],
            "correo" => $_POST['correo'],
            "contraseña" => $_POST['contraseña'],
            "foto" => array(
                "file_name" => $file_name,
                "file_size" => $file_size,
                "file_tmp" => $file_tmp,
                "file_type" => $file_type,
                "imagen" => new Binary($contenido_bytes, Binary::TYPE_GENERIC)
            )
        );


        $new = $this->model->setUsuario($newUsuario);

        include_once './src/views/usuario/usuario.php';
    }

    // Obtiene los usuarios y renderiza la vista
    public function getUsuarios()
    {
        $usuarios = $this->model->getUsuarios();
        /* print_r($usuarios); */
        $py = $usuarios->toArray();
        $paginaActual = isset($_GET['paginaActual']) ? intval($_GET['paginaActual']) : 1;
        $total_registros = sizeof($py);
        $cantxpagina = 5;
        $first_registro = ($paginaActual - 1) * $cantxpagina;
        //$last_registro = $first_registro + $cantxpagina;
        $itemFiltrados = array_slice(($py), $first_registro, $cantxpagina); // array, indice, cantidad elementos
        $paginas = ceil($total_registros / $cantxpagina);

        include_once './src/views/usuario/listadoUsuarios.php';
    }

    // Ruta para obtener imagen de usuario
    public function getImagen()
    {
        // Obtener el ID del documento que contiene la imagen
        $id_documento = new ObjectID($_GET['id']);
        /* echo($id_documento); */
        echo $this->model->getImagen($id_documento);
    }

    public function editUsuario()
    {
        $id_usuario = new ObjectID($_POST['id']);
        $usuario = $this->model->getUsuario($id_usuario);

        include_once './src/views/usuario/editarUsuario.php';
    }

    public function setEditUsuario()
    {
        $id_user = new ObjectID($_POST['id']);
        // Obtener las propiedades del archivo
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_type = $_FILES['foto']['type'];
        
        $contenido_bytes = '';
        if ($file_tmp != '') {
            $contenido_bytes = file_get_contents($file_tmp);
            $tmp = explode('.', $file_name);
            $file_ext = strtolower(end($tmp));

            $expensions = array("jpeg", "jpg", "png");
            // Validacion
            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
        }
        if ($contenido_bytes > 0) {
            $newUsuario = array(
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "usuario" => $_POST['usuario'],
                "correo" => $_POST['correo'],
                "contraseña" => $_POST['contraseña'],
                "foto" => array(
                    "file_name" => $file_name,
                    "file_size" => $file_size,
                    "file_tmp" => $file_tmp,
                    "file_type" => $file_type,
                    "imagen" => new Binary($contenido_bytes, Binary::TYPE_GENERIC)
                )
            );
        } else {
            $newUsuario = array(
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "usuario" => $_POST['usuario'],
                "correo" => $_POST['correo'],
                "contraseña" => $_POST['contraseña']
            );
        }



        $new = $this->model->editUsuario($id_user, $newUsuario);

        header('Location: ./index?c=Usuario&m=getUsuarios');
    }

    // Reportes
    public function downLoadExcel()
    {
        $users = $this->model->getUsuarios();
        include('./src/reportes/excel/rptUsuarios.php');
    }

    public function downLoadPDF()
    {
        $users = $this->model->getUsuarios();
        include('./src/reportes/pdf/rptUsuarios.php');
    }
}
