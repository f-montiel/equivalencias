<?php
	include 'session.php';
	include 'connection.php';

	$consulta = $pdo->prepare("INSERT INTO equivalencias.tipos_um (nombre) VALUES (?)");
	$tipoUm = $_POST['tipoUm'];
	$consulta->execute(array("$tipoUm"));


	header('tipo_de_unidad_de_medida.php');


?>


