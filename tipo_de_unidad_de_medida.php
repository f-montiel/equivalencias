<?php  
	include 'connection.php';
	$pdo = connect();
	$consulta = $pdo->prepare('SELECT idtipos_um, nombre FROM equivalencias.tipos_um');
	$consulta->execute();
?>