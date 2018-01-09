<?php  
	include 'connection.php';
	$pdo = connect();
	$consulta = $pdo->prepare('SELECT idunidades_de_medida, nombre, valor, idtipos_um FROM equivalencias.unidades_de_medida');
	$consulta->execute();
?>