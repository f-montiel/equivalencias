<?php
include 'session.php';
include 'connection.php';

$pdo = connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare('INSERT INTO equivalencias.unidades_de_medida (nombre , valor, idtipos_um) VALUES (?, ?, ?)');
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$tipo_um = $_POST['tipo_um'];

$consulta->execute(array($nombre, $valor, $tipo_um));

header('location:tipo_de_unidad_de_medida.php');

?>

