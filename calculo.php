<?php  
	include 'connection.php';
	$pdo = connect();
	$nombres = $_GET['nombre'];
	$idtipos_um = $_GET['idtipos_um'];
	$consulta = $pdo->prepare('SELECT idunidades_de_medida, nombre, valor, idtipos_um FROM equivalencias.unidades_de_medida');
	$consulta->execute();
?>