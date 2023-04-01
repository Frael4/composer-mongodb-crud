<?php
include_once './src/views/components/header.php';
?>

<div class="row justify-content-center">
    <div class="col-sm-6">
        <h3 class="row justify-content-center p-3"></h3>
        <form action="./index.php?c=Libro&m=setLibro" method="post" class="card card-body shadow">
            <div class="card-title">
                <h4 class="text-center fw-bold">Registro de Libros</h4>
            </div>
            <div class="form-floating mb-2">
                <input id="nombre" name="nombre" type="text" class="form-control" maxlength="30" required>
                <label for="nombre">Nombre <a class="text-danger text-decoration-none">*</a> </label><!-- Label debe ir debajo para que funcione -->

            </div>
            <div class="form-floating mb-2">
                <input id="descripcion" name="descripcion" type="text" class="form-control" maxlength="100" required>
                <label for="descripcion">Descripcion <a class="text-danger text-decoration-none">*</a></label>
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

            <button class="btn btn-success" type="submit">Guardar</button>

        </form>

    </div>

</div>


<?php
include_once './src/views/components/footer.php';
?>