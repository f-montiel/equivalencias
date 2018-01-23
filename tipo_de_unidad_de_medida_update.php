<?php
include 'session.php';
include 'connection.php';

$idtipos_um = $_POST['idtipos_um'];

$consulta = $pdo->prepare("UPDATE equivalencias.tipos_um SET nombre=(?) WHERE idtipos_um=$idtipos_um ");
$tipoUm = $_POST['tipoUm'];
$consulta->execute(array($tipoUm));

header('location:tipo_de_unidad_de_medida.php');

?>