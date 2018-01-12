<?php

include 'connection.php';

$consulta = $pdo->prepare('SELECT nombre FROM equivalencias.tipos_um WHERE idtipos_um = ?');
$idtipos_um = $_GET['idtipos_um'];
$consulta->execute(array("$idtipos_um"));
$tipo_um = $consulta->fetchAll();

$Consulta_unidad_de_medida = $pdo->prepare('SELECT idunidades_de_medida, nombre, valor FROM equivalencias.unidades_de_medida WHERE idTipos_um = ?');
$Consulta_unidad_de_medida->execute([$idtipos_um]);
$unidades_de_medida = $Consulta_unidad_de_medida->fetchAll();

include 'tipo_de_unidad_de_medida_editar_view.php';

?>