<?php
require_once './src/views/components/header.php';

?>
<div class="row justify-content-center">
    <div class="col-6">
        <form class="card card-body shadow my-4" action="?c=Usuario&m=setEditUsuario" method="POST" enctype="multipart/form-data">
            <div class="card-title center">
                <h4 class="text-center fw-bold">Editar Usuario</h4>
            </div>
            <div class="row justify-content-center mb-2 ">
                <div class="d-flex justify-content-center image-content">
                    <img src="./?c=Usuario&m=getImagen&id=<?php echo $usuario->_id; ?>" class="shadow circular--square" id="image-preview" alt=" " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Sube una imagen!">
                    <i class="bi bi-camera" style="position: absolute; margin-top: 30%;"></i>
                </div>
                <input id="foto" class="d-none" name="foto" type="file">
            </div>
            <input value="<?php echo $usuario->_id; ?>" name="id" type="hidden" />
            <div class="form-group mb-2">
                <input class="form-control" name="nombre" value="<?php echo $usuario->nombre; ?>" type="text" placeholder="Nombres" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="apellido" value="<?php echo $usuario->apellido ?>" type="text" placeholder="Apellidos" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="usuario" value="<?php echo $usuario->usuario ?>" type="text" placeholder="Usuario" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="correo" value="<?php echo $usuario->correo ?>" type="text" placeholder="algo@email.com" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="contraseña" value="<?php echo $usuario->contraseña ?>" type="password" placeholder="Contraseña" required>
            </div>
            <button class="btn btn-success" type="submit">Editar</button>
        </form>
    </div>
</div>
<script text="javascript" src="./src/public/js/usuario/usuario.js"></script>

<?php
require_once './src/views/components/footer.php';
?>