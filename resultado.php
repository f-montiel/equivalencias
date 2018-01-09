<?php
$valorInput = $_POST['input'];
$valorOutput = $_POST['output'];
$resultado = $_POST['cantidad'] * pow(10, $valorInput-$valorOutput);

include 'resultado_view.php';

?>

