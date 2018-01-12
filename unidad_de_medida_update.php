<?php

include 'connection.php';

$consulta = $pdo->prepare('UPDATE nombre, valor equivalencias.unidades_de_medida SET  (?, ?) WHERE idunidades_de_medida = ?');
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$idunidades_de_medida = $_POST['idunidades_de_medida'];

$consulta->execute(array($nombre, $valor));

header('location:tipo_de_unidad_de_medida_editar.php');

?>