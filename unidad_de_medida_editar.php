<?php

include 'connection.php';

$consulta = $pdo->prepare('SELECT nombre, valor, idtipos_um FROM equivalencias.unidades_de_medida WHERE idunidades_de_medida = ?');

$idunidades_de_medida = $_GET['idunidades_de_medida'];

$consulta->execute(array($idunidades_de_medida));

$unidades_de_medida = $consulta->fetchAll();

include 'unidad_de_medida_editar_view.php'

?>