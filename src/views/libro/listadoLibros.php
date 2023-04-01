<?php
include_once './src/views/components/header.php';
?>

<div class="card card-body">
    <h4 class="card-title">Listado de Libros</h4>

    <div class="accordion" id="accordionExample">
        <?php foreach ($libros as $libro) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="<?php echo "heading" . $libro->_id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo "#collapse" . $libro->_id ?>" aria-expanded="false" aria-controls="<?php echo "#collapse" . $libro->_id ?>">
                        <p><strong> Libro: </strong> <?php echo $libro->nombre ?></p>
                    </button>
                </h2>
                <div id="<?php echo "collapse" . $libro->_id ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo "heading" . $libro->_id ?>" data-bs-parent=" #accordionExample">
                    <div class="accordion-body">
                        <div class="card card-body px-4">
                            <li>Descripcion: <?php echo $libro->descripcion ?> </li>
                            <li>Autor: <?php echo $libro->autor ?> </li>
                            <li>Fecha: <?php $feca = new \MongoDB\BSON\UTCDateTime($libro->fecha->toDateTime());
                                        echo $feca->toDateTime()->format(DATE_RSS) ?></li>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>


<?php
include_once './src/views/components/footer.php';
?>