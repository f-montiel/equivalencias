<!DOCTYPE html>
<html>
<head>
	<title>Equivalencias</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<h1></h1>
	<form action="unidad_de_medida_guardar.php" method="POST">
		<label>Unidad de Medida</label>
		<input type="text" name="nombre">
		<label>Valor</label>
		<input type="number" name="valor">
		<select name="tipo_um">
			<?php
				include 'tipo_de_unidad_de_medida.php';
				foreach ($consulta as $consulta) {
					echo "<option value =" . $consulta['idtipos_um'] . ">" . $consulta['nombres'];
				}
			?>
		</select>
		<input type="submit" name="guardar" value="Guardar">
	</form>


</body>
</html>