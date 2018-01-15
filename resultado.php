<?php
$valorInput = $_POST['input'];
$valorOutput = $_POST['output'];
$cantidad = $_POST['cantidad'];
$idunidades_de_medida = $_POST['idunidad_de_medida'];
$resultado = $cantidad * pow(10, $valorInput-$valorOutput);

include 'connection.php';

$consulta = $pdo->prepare('SELECT nombre FROM equivalencias.unidades_de_medida WHERE idunidades_de_medida = ?');
$consulta->execute([$idunidades_de_medida]);

$unidadesDeMedida = $consulta->fetchAll();


include 'resultado_view.php';

?>

