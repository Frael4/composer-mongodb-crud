<?php
require_once './src/views/components/header.php';
?>


<div class="container">

    <div class="card card-body shadow-sm p-3 my-2">
        <!-- <button class="btn btn-primary btn-block">Crear</button> -->
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <input class="form-control" type="text" value="" placeholder="Busqueda global...">
            </div>
            <div class=" col-sm-4 col-md-4 row form-group mb-2">
                <div class="col-sm-3 col-md-3">
                    <label class="col-form-label" for="cbFiltro">Ciudad:</label>
                </div>
                <div class="col-sm-8 col-md-8">
                    <select id="cbFiltro" class="form-select" type="text" value="">
                        <option selected class="text-muted">Seleccione...</option>
                        <option value="">Nevada</option>
                        <option value="">California</option>
                        <option value="">Westerdean</option>
                    </select>
                </div>
            </div>
            <div class=" col-sm-4 col-md-4 form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label" for="cbFiltro">Ocupacion:</label>
                </div>
                <div class="col-sm-8  col-md-8">
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
            <h2 class="col-auto fw-bold">Usuarios</h2>

            <div class="col-auto align-self-end input-form">
                <button class="btn btn-outline-warning "><a class="nav-link" href="/index.php?c=Usuario&m=downloadPDF">PDF</a></button>
                <button class="btn btn-outline-success "><a class="nav-link" href="/index.php?c=Usuario&m=downLoadExcel">Excel</a></button>
            </div>
        </div>

        <div class="accordion mb-2" id="accordionListadoUsuarios">
            <?php foreach ($itemFiltrados as $user) : ?>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $user->_id ?>" aria-controls="panelsStayOpen-collapseOne">
                            <div class="col-auto">
                                <img style="width: 50px; height: 50px;" class="circular--square d-block" src="./?c=Usuario&m=getImagen&id=<?php echo $user->_id; ?>" alt="foto">
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
                                <div class="col">
                                    <div class="row justify-content-center">
                                        <img style="width:  1200px; " class="" src="./?c=Usuario&m=getImagen&id=<?php echo $user->_id; ?>" alt="foto">
                                    </div>
                                </div>

                                <div class="col p-2">
                                    <div class="col-auto  row mx-2 ">
                                        <strong>Nombre Completo</strong>
                                        <label for=""><?php echo $user->nombre . ' ' . $user->apellido; ?></label>
                                    </div>
                                    <div class="col-auto row mx-2">
                                        <strong>Biografia</strong>
                                        <p contenteditable="true">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati vero neque enim saepe iusto
                                            sint,
                                            😊😂🤣🎶🎂🎉🐱‍🐉🐱‍👓🐱‍🚀🤳🐱‍👤🐱‍🏍
                                        </p>
                                    </div>

                                </div>
                                <div class="col p-2">
                                    <div class="col row mx-2 ">
                                        <strong class="">Nombre de Usuario</strong>
                                        <label for=""><?php echo $user->usuario; ?></label>
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
                                <div class="col p-2">

                                    <div class="row">
                                        <div class="col row mx-2 ">
                                            <strong>Correo</strong>
                                            <label for=""><?php echo $user->correo; ?></label>
                                        </div>
                                        <div class="col-auto row mx-2 ">
                                            <strong>Ocupacion</strong>
                                            <label for="">Estudiante</label>
                                        </div>
                                        <div class="row align-items-center mt-5 row mx-2">
                                            <div class="col">
                                                <div class="d-grid  align-items-centers">
                                                    <form action="./index?c=Usuario&m=editUsuario" method="post">
                                                        <button value="<?php echo $user->_id ?>" name="id" class="btn btn-success" type="submit">Editar</button>
                                                    </form>
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
                <li class="page-item <?php echo $paginaActual == 1 ? "disabled" : ""?>">
                    <a href="./index.php?c=Usuario&m=getUsuarios&paginaActual=<?php echo $paginaActual - 1 ?>"class="page-link">Previous</a>
                </li>

                <?php for ($i = 0; $i < $paginas; $i++) : ?>
                    <li class="page-item <?php echo $paginaActual == $i + 1 ? 'active' : '' ?>" aria-current="page">
                        <a class="page-link" href="./index.php?c=Usuario&m=getUsuarios&paginaActual=<?php echo $i + 1 ?>"> <?php echo $i + 1  ?></a>
                    </li>
                <?php endfor ?>

                <li class="page-item">
                    <a class="page-link <?php echo $paginaActual >= $paginas ? "disabled" : ""?>" href="./index.php?c=Usuario&m=getUsuarios&paginaActual=<?php echo $paginaActual + 1 ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</div>

<?php
require_once './src/views/components/footer.php';
?>