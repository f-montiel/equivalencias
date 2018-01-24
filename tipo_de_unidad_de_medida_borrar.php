<?php
include 'connection.php';

include 'session.php';

$consulta = $pdo->prepare("DELETE FROM equivalencias.tipos_um WHERE idtipos_um = ?");
$tipoUm = $_GET['idtipos_um'];

try {
$consulta->execute(array("$tipoUm"));
} catch(Exception $consulta) {
  $error='error';
} 
$pdo = connect();
$consulta = $pdo->prepare('SELECT idtipos_um, nombre FROM equivalencias.tipos_um');
$consulta->execute();
$tipos_um = $consulta->fetchAll();

if (isset($error)) {
	$printerror = 'Este tipo de unidad de medida no puede ser borrada';
	include 'pagina_principal.php';
}else{
	$printconfirmation = 'El tipo de unidad de medida ah sido borrado';
	include 'pagina_principal.php';
	
}

?>