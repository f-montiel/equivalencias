<?php
include 'session.php';
include 'connection.php';

$consulta = $pdo->prepare("DELETE  FROM equivalencias.unidades_de_medida WHERE idunidades_de_medida = ?");
$idunidades_de_medida = $_GET['idunidades_de_medida'];

try {
$consulta->execute(array("$idunidades_de_medida"));
} catch(Exception $consulta) {
  $error='error';
} 

if (isset($error)) {
	$printerror = 'Esta unidad de medida no puede ser borrada';
}else{
	$printerror = 'Los datos se han borrado con exito';
}

include 'unidad_de_medida_borrar_vista.php';

?>