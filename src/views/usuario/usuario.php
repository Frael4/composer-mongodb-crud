<?php
require_once './src/views/components/header.php';
?>
<div class="row justify-content-center">
    <div class="col-6">
        <form class="card card-body shadow my-4" action="?c=Usuario&m=setUsuario" method="POST" enctype="multipart/form-data">
            <div class="card-title center">
                <h4 class="text-center fw-bold">Registro de Usuario</h4>
            </div>
            <div class="row justify-content-center mb-2 ">
                <div class="d-flex justify-content-center image-content">
                    <img class="shadow circular--square" id="image-preview" alt=" " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Sube una imagen!">
                    <i class="bi bi-camera" style="position: absolute; margin-top: 30%;"></i>
                </div>
                <input id="foto" class="d-none" name="foto" type="file">
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="nombre" type="text" placeholder="Nombres" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="apellido" type="text" placeholder="Apellidos" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="usuario" type="text" placeholder="Usuario" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="correo" type="text" placeholder="algo@email.com" required>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="contraseña" type="password" placeholder="Contraseña" required>
            </div>

            <button class="btn btn-success" type="submit">Guardar</button>
        </form>
    </div>
</div>
<?php if (isset($new) && $new->getInsertedCount() > 0) : ?>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Usuario registrado correctamente!
            </div>
        </div>
    </div>
<?php endif ?>


<script text="javascript" src="./src/public/js/usuario.js"></script>
<?php
require_once './src/views/components/footer.php';
?>