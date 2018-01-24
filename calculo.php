<?php  
	include 'connection.php';
	$nombres = $_GET['nombre'];
	$idTiposUm = $_GET['idTiposUm'];
	$consulta = $pdo->prepare('SELECT idunidades_de_medida, nombre, valor, idtipos_um FROM equivalencias.unidades_de_medida WHERE idtipos_um = ?');
	$consulta->execute([$idTiposUm]);

	$unidadesDeMedida = $consulta->fetchAll();

	$nombreTipoUm = $_GET['nombre'];

	include 'calculo_view.php';
?>