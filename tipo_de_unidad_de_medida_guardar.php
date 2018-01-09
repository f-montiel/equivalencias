<?php
	include 'connection.php';

	$consulta = $pdo->prepare("INSERT INTO equivalencias.tipos_um (nombres) VALUES (?)");
	$tipoUm = $_POST['tipoUm'];
	$consulta->execute(array("$tipoUm"));

	header('location:index.php');

?>


