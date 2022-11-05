<?php
    require_once './src/views/components/header.php';
?>

<div class="row justify-content-center">
    <div class="col-6">
        <form class="card card-body" action="?c=Usuario&m=setUsuario" method="POST" enctype="multipart/form-data">
            <input name="nombre" type="text" placeholder="Nombre">
            <input name="correo" type="text" placeholder="Correo">
            <input name="contraseña" type="text" placeholder="Contraseña">
            <input name="foto" type="file">
            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
</div>

<?php
    require_once './src/views/components/footer.php';
?>