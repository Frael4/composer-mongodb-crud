<?php
require_once './src/views/components/header.php';
?>

<div class="container">


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
        <div class="card-title row justify-content-between">
            <h2 class="col-auto">Usuarios</h2>

            <div class="col-auto align-self-end input-form">
                <button class="btn btn-outline-warning "><a class="nav-link" href="/index.php?c=Usuario&m=downloadPDF">PDF</a></button>
                <button class="btn btn-outline-success "><a class="nav-link" href="/index.php?c=Usuario&m=downLoadExcel">Excel</a></button>
            </div>
        </div>

        <div class="accordion mb-2" id="accordionListadoUsuarios">
            <?php foreach ($py as $user) : ?>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $user->_id ?>" aria-controls="panelsStayOpen-collapseOne">
                            <div class="col-auto">
                                <img style="width: 50px; height:auto" class="circular--square d-block" src="../../../src/public/img/bear.jpeg" alt="foto">
                            </div>
                            <div class="row ">
                                <div class="col-auto mx-2">
                                    <strong><?php echo $user->nombre ?></strong>
                                </div>
                                <div class="col-auto ">
                                    <strong>Ultima vez:</strong> 2022-11-2
                                </div>
                            </div>
                        </div>
                    </h2>
                    <div id="panelsStayOpen-collapse<?php echo $user->_id ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">

                            <div class="row  mx-auto ">
                                <div class="col  -primary ">

                                    <div class="row justify-content-center">
                                        <img style="width:  1200px; " class="  " src="../../../src/public/img/bear.jpeg" alt="foto">

                                    </div>
                                </div>

                                <div class="col -danger p-2">
                                    <div class="col-auto  -danger row mx-2 ">
                                        <strong>Nombre Completo</strong>
                                        <label for="">Juan Perez</label>
                                    </div>
                                    <div class="col-auto row mx-2">
                                        <strong>Biografia</strong>
                                        <p>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati vero neque enim saepe iusto
                                            sint,
                                            😊😂🤣🎶🎂🎉🐱‍🐉🐱‍👓🐱‍🚀🤳🐱‍👤🐱‍🏍
                                        </p>
                                    </div>

                                </div>
                                <div class="col  -danger p-2">
                                    <div class="col row mx-2  -danger">
                                        <strong class="">Nombre de Usuario</strong>
                                        <label for="">@Skyler</label>
                                    </div>
                                    <div class="col row mx-2">
                                        <strong>Ocupacion</strong>
                                        <label for="">Estudiante</label>
                                    </div>

                                    <div class="col row mx-2">
                                        <strong>Fecha Nacimiento</strong>
                                        <label for="">July 8, 2022</label>
                                    </div>
                                    <div class="col row mx-2">
                                        <strong>Ciuad</strong>
                                        <label for="">Amsterdan</label>
                                    </div>
                                    <div class="col row mx-2 -success">
                                        <strong>Residencia</strong>
                                        <label for="">Nevada US</label>
                                    </div>
                                </div>
                                <div class="col  -info p-2">

                                    <div class="row">
                                        <div class="col row mx-2   -success ">
                                            <strong>Correo</strong>
                                            <label for="">Skyler@algomial.com</label>
                                        </div>
                                        <div class="col-auto row mx-2  -success ">
                                            <strong>Ocupacion</strong>
                                            <label for="">Estudiante</label>
                                        </div>
                                        <div class="row align-items-center -danger mt-5 row mx-2">
                                            <div class="col  -success ">
                                                <div class="d-grid  align-items-centers">
                                                    <button class="btn btn-success" type="button">Editar</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

        <nav class="row align-self-end" aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="" class="page-link">Previous</a>
                </li>

                <?php for ($i = 0; $i < $paginas; $i++) : ?>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#"><?php echo $i + 1  ?></a>
                    </li>
                <?php endfor ?>

                <li class="page-item">
                    <a class="page-link" href="">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</div>


<?php
require_once './src/views/components/footer.php';
?>