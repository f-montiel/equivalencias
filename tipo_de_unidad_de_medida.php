<?php
	include 'session.php';
	$usuario_session = $_SESSION['user'];
	include 'connection.php';
	$pdo = connect();
	$consulta = $pdo->prepare('SELECT idtipos_um, nombre FROM equivalencias.tipos_um');
	$consulta->execute();
	$tipos_um = $consulta->fetchAll();
	include 'pagina_principal.php';
?>