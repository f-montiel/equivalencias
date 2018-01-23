<?php
include 'session.php';
$valorInput = $_POST['input'];
$valorOutput = $_POST['output'];
$cantidad = $_POST['cantidad'];
$resultado = $cantidad * pow(10, $valorInput-$valorOutput);

include 'resultado_view.php';

?>

