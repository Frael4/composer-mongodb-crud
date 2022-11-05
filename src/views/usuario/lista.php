<?php
require_once './src/views/components/header.php';
?>

<div class="container">
    <?php foreach ($usuarios as $user) : ?>
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
    <?php endforeach ?>
</div>


<?php
require_once './src/views/components/header.php';
?>