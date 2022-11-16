<?php
require_once './src/views/components/header.php';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <form class="card card-body shadow my-4" action="?c=Usuario&m=setUsuario" method="POST" enctype="multipart/form-data">
            <div class="card-title">
                <h4>Registro de Usuario</h4>
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="nombre" type="text" placeholder="Nombre">
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="correo" type="text" placeholder="Correo">
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="contraseña" type="text" placeholder="Contraseña">
            </div>
            <div class="form-group mb-2">
                <input class="form-control" name="foto" type="file">
            </div>
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
</div>

<?php
require_once './src/views/components/footer.php';
?>