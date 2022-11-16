<?php
require_once './src/views/components/header.php';
?>

<div class="container">
    <!-- <?php foreach ($usuarios as $user) : ?>
        <ul>
            <li>Nombre :<?php echo $user->nombre ?></li>
            <li>Correo :<?php echo $user->correo ?></li>
            <li>Contraseña :<?php echo $user->contraseña ?></li>
            <?php foreach ($user->foto->jsonSerialize() as $foto) : ?>
                <li>Foto :<?php echo $foto->file_name ?></li>
                <li>Foto :<?php echo $foto->file_size ?></li>
                <li>Foto :<?php echo $foto->file_tmp ?></li>
                <li>Foto :<?php echo $foto->file_type ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?> -->

    <!-- Bootstrap 3.3.4 -->
    <!-- <div class="panel-group" id="accordion" role="tablist">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading">
                <div class="panel-title">
                    <a href="#collapse" data-bs-toggle="collapse" data-bs-parent="#accordion">
                        Encabezado
                    </a>
                </div>
            </div>
            <div id="collapse" class="panel-collapse collapse in">
                <div class="panel-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quia perspiciatis earum et odit sapiente, facere molestias labore nulla reprehenderit consequuntur praesentium a in perferendis libero rem optio qui quasi?
                </div>
            </div>
        </div>
    </div> -->

    <div class="card card-body shadow-sm p-3 my-2">
        <!-- <button class="btn btn-primary btn-block">Crear</button> -->
        <div class="row">
            <div class="col-4 ">
                <input class="form-control" type="text" value="" placeholder="Busqueda global...">
            </div>
            <div class="col-4 row form-group">
                <label class="col-3 col-form-label" for="cbFiltro">Ciudad:</label>
                <div class="col-8">
                    <select id="cbFiltro" class="form-select" type="text" value="">
                        <option selected class="text-muted">Seleccione...</option>
                        <option value="">Nevada</option>
                        <option value="">California</option>
                        <option value="">Westerdean</option>
                    </select>
                </div>
            </div>
            <div class="col-4 row">
            <label class="col-4 col-form-label" for="cbFiltro">Ocupacion:</label>
                <div class="col-8">
                    <select id="cbFiltro" class="form-select" type="text" value="">
                        <option selected class="text-muted">Seleccione...</option>
                        <option value="">Arquitecto</option>
                        <option value="">Contador</option>
                        <option value="">Developer</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-body shadow-sm">
        <div class="card-title">
            <h2>Usuarios</h2>
        </div>
        <div class="accordion" id="accordionListadoUsuarios">
            <div class="accordion-item">
                <h2 class="accordion-header" id="">
                    <div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-controls="panelsStayOpen-collapseOne">
                        <div class="col-2">
                            <strong>Usuario:</strong> @Juan
                        </div>
                        <div class="col-2">
                            <strong>Ultima vez:</strong> 2022-11-2
                        </div>
                    </div>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="row gy-2 gx-3 justify-content-center">
                            <div class="col-3">
                                <img style="width: 100px; " class="shadow img-fluid rounded mx-auto d-block" src="../../../src/public/img/bear.jpeg" alt="foto">
                            </div>

                            <div class="col-3 shadow-sm p-2">
                                <strong>Nombre Completo:</strong>
                                <label for="">Juan Perez</label>
                            </div>
                            <div class="col-3 shadow-sm p-2">
                                <strong>Ocupacion:</strong>
                                <label for="">Estudiante</label>
                            </div>
                            <div class="col-3 shadow-sm p-2">
                                <strong>Residencia:</strong>
                                <label for="">Nevada US</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <div class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-controls="panelsStayOpen-collapseOne">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                Nombre: Juan

                            </div>
                            <div class="col-auto">
                                Apellido : Perez
                            </div>
                        </div>
                    </div>
                </h2>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="row gy-2 gx-3 justify-content-center">
                            <div class="col-auto">
                                <img style="width: 100px; " class="shadow img-fluid rounded mx-auto d-block" src="../../imagenes/activosfijos.png" alt="foto">
                            </div>

                            <div class="col-auto">
                                <input type="text">
                                <label for="">Etiqute</label>
                            </div>
                            <div class="col-auto">
                                <input type="text">
                                <label for="">Etiqute</label>
                            </div>
                            <div class="col-auto">
                                <input type="text">
                                <label for="">Etiqute</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
require_once './src/views/components/footer.php';
?>