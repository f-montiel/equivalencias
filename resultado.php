<?php
include 'session.php';
$valorInput = $_POST['input'];
$valorOutput = $_POST['output'];
$cantidad = $_POST['cantidad'];
$idunidades_de_medida = $_POST['idunidad_de_medida'];
$resultado = $cantidad * pow(10, $valorInput-$valorOutput);

include 'connection.php';


$consultaUnidadMedida = $pdo->prepare('SELECT nombre FROM equivalencias.unidades_de_medida 
										WHERE idunidades_de_medida = ?');
$consultaUnidadMedida->execute([$valorOutput]);

$unidadesDeMedida = $consultaUnidadMedida->fetchAll();

$consultaTipoUnidadMedida = $pdo->prepare('SELECT nombre FROM equivalencias.tipos_um 
										WHERE idtipos_um = ?');

$idTipoUnidadMedida = $_POST['idTipoUnidadMedida'];
$tipoUnidadMedida = $consultaTipoUnidadMedida->execute(array($idTipoUnidadMedida)); 


include 'resultado_view.php';

?>

