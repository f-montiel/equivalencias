<!DOCTYPE html>
<html>
<head>
<?php

include 'connection.php';

$pdo = connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare('INSERT INTO equivalencias.unidades_de_medida (nombre , valor, idtipos_um) VALUES (?, ?, ?)');
$nombre = $_POST(nombre);
$valor = $_POST(valor);
$tipo_um = $_POST(tipo_um);

$consulta->execute()

?>
	<title></title>
</head>
<body>
	<div>
		<p>Los datos se han grabado con exito</p><br/>
	</div>
	<div>
		<a href="index.php">
			<button>Volver</button>
		</a>
	</div>	
</body>

</html>


	<div>