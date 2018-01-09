<?php
$valorInput = $_POST['input'];
$valorOutput = $_POST['output'];
$cantidad = $_POST['cantidad'];

$resultado = $cantidad * pow(10, $valorInput-$valorOutput);

include 'connection.php';

$consulta = $pdo->prepare('SELECT nombre FROM equivalencias.unidades_de_medida WHERE idtipos_um = ?');
$consulta->execute([$valorOutput]);

$unidadesDeMedida = $consulta->fetchAll();



include 'resultado_view.php';

?>

