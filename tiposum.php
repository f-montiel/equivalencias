<!DOCTYPE html>
<html>
<head>
<?php
include 'connection.php';

$tipoUm = $_POST['tipoUm'];

$pdo = connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare("INSERT INTO equivalencias.tipos_um (nombres) VALUES (?)");
$consulta->execute(array("$tipoUm"));


?>
	<title></title>
</head>
<body>
	<div>
		<p>Los datos se han grabado con exito</p>
	</div>
	<div>
		<a href="index.php"><button>Volver</button></a>
	</div>
</body>
</html>


