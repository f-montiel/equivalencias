<?php
include 'session.php';
include 'connection.php';

$consulta = $pdo->prepare("UPDATE equivalencias.unidades_de_medida SET unidades_de_medida.nombre = ?, unidades_de_medida.valor = ?, unidades_de_medida.idtipos_um = ? WHERE idunidades_de_medida = ?");
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$idunidades_de_medida = $_POST['idunidades_de_medida'];
$idtipos_um = $_POST['idtipos_um'];

$consulta->execute(array($nombre, $valor, $idtipos_um, $idunidades_de_medida));

header('location:index.php');

?>