<?php
include_once './src/views/components/header.php';
?>

<div class="container">

    <div class="row justify-content-center my-3 shadow bg-body rounded">
        <h3 class="row justify-content-center p-3">Registro de Libros</h3>
        <form action="./index.php?c=Libro&m=setLibro" method="post" class="col-6 mb-2 p-2">
            <div class="form-floating mb-2">
                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control" maxlength="30">
                <label for="nombre">Nombre</label><!-- Label debe ir debajo para que funcione -->
            </div>
            <div class="form-floating mb-2">
                <input id="descripcion" name="descripcion" type="text" class="form-control">
                <label for="descripcion">Descripcion</label>
            </div>
            <div class="form-floating mb-2">
                <input id="autor" name="autor" type="text" class="form-control">
                <label for="autor">Autor</label>
            </div>
            <div class="form-floating mb-2">
                <input id="fecha" name="fecha" type="date" class="form-control">
                <label for="fecha">Fecha</label>
            </div>
            <div class="form-floating mb-3">
                <input id="precio" name="precio" type="text" class="form-control">
                <label for="precio">Precio</label>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-success">Guardar Datos</button>
            </div>
        </form>

    </div>

</div>


<?php
include_once './src/views/components/footer.php';
?>