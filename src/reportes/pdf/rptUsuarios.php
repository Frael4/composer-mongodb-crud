<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
//Intansiacion
$dompdf = new Dompdf();
//obtener opciones
$options =  $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
//Setear opciones agregadas
$dompdf->setOptions($options);
$dompdf->loadHtml('Listado Usuarios');

//Diseño de hoka
//$dompdf->setPaper('letter');
$dompdf->setPaper('A4', 'landspace');


//Pinta el PDF
$dompdf->render();
$dompdf->stream('usuarios.pdf', array('Attachment' => false)); // false = no descargar