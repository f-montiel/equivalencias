<?php

include 'connection.php';

$consulta = $pdo->prepare('SELECT nombre FROM equivalencias.tipos_um WHERE idtipos_um = ?');
$idtipos_um = $_GET['idtipos_um'];
$consulta->execute(array("$idtipos_um"));
$tipo_um = $consulta->fetchAll();

include 'tipo_de_unidad_de_medida_editar_view.php';

?>