<?php
include_once './src/views/components/header.php';
?>

<div class="card card-body">
    <h4 class="card-title">Listado de Libros</h4>

    <div class="accordion" id="accordionExample">
        <?php foreach ($libros as $libro) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="<?php echo "heading" . $libro->_id ?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo "#collapse" . $libro->_id ?>" aria-expanded="false" aria-controls="collapseOne">
                        <p><strong>Nombre Libro: </strong> <?php echo $libro->nombre ?></p>
                        <?php
                        print_r(new \MongoDB\BSON\UTCDateTime(($libro->fecha)));
                        ?>
                    </button>
                </h2>
                <div id="<?php echo "collapse" . $libro->_id ?>" class="accordion-collapse collapse " aria-labelledby="<?php echo "heading" . $libro->_id ?>"" data-bs-parent=" #accordionExample">
                    <div class="accordion-body">
                        <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                        <li>Descripcion: <?php echo $libro->descripcion ?> </li>
                        <li>Autor: <?php echo $libro->autor ?> </li>
                        <li>Fecha:
                        </li>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php
include_once './src/views/components/footer.php';
?>