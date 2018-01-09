<?php  
	include 'connection.php';
	$nombres = $_GET['nombre'];
	$idtipos_um = $_GET['idtipos_um'];
	$consulta = $pdo->prepare('SELECT idunidades_de_medida, nombre, valor, idtipos_um FROM equivalencias.unidades_de_medida WHERE idtipos_um = ?');
	$consulta->execute([$idtipos_um]);

	$unidadesDeMedida = $consulta->fetchAll();

	include 'calculo_view.php';
?>