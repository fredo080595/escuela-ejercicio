<?php  

require_once 'funciones.php';

$matricula = $_POST['mat'] ?? '';
$clave = $_POST['clave'] ?? '';


echo json_encode(insertarDatosMatricula($matricula,$clave));