<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //exportador
use PhpOffice\PhpSpreadsheet\IOFactory;

$excel = new Spreadsheet();
$firstSheet = $excel->getActiveSheet();
$firstSheet->setTitle('Usuarios');

$firstSheet->setCellValue('A1', 'Nombre');
$firstSheet->setCellValue('B1', 'Correo');
$firstSheet->setCellValue('C1', 'Contraseña');

$fila = 2;
foreach ($users as $u) {
    $firstSheet->setCellValue('A'.$fila, $u->nombre);
    $firstSheet->setCellValue('B'.$fila, $u->correo);
    $firstSheet->setCellValue('C'.$fila, $u->contraseña);
    $fila++;
}
// Investigar
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="usuarios.xlsx"');
header('Cache-Control: max-age=0');

/* $writer = new Xlsx($excel, 'Xlsx');
$writer->save('php://output'); */
$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;