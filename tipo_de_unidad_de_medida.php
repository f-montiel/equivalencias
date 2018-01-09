<?php  
	include 'connection.php';
	$pdo = connect();
	$consulta = $pdo->prepare('SELECT idtipos_um, nombres FROM equivalencias.tipos_um');
	$consulta->execute();
?>