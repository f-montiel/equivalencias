<?php
include 'session.php';
include 'connection.php';

$consulta = $pdo->prepare("DELETE FROM equivalencias.unidades_de_medida WHERE idunidades_de_medida = ?");
$tipoUm = $_GET['idtipos_um'];

try {
$consulta->execute(array("$tipoUm"));
} catch(Exception $consulta) {
  $error='error';
} 

if (isset($error)) {
	$printerror = 'Este tipo de unidad de medida no puede ser borrada';
}else{
	$printerror = 'Los datos se han borrado con exito';
}

include 'tipo_de_unidad_de_medida_borrar_vista.php';

?>