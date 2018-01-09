<!DOCTYPE html>
<html>
<head>
	<title>Equivalencias</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h3>Agregar Nueva Unidad de Medida</h3>
	<form action="unidad_de_medida_guardar.php" method="POST">
		<label>Unidad de Medida</label>
		<input type="text" name="nombre">
		<label>Valor</label>
		<input type="number" name="valor">
		<label>Tipo de Unidad de Medida</label>
		<select name="tipo_um" required="true">
			<option>--Seleccione tipo de U.M.</option>
			<?php
				include 'tipo_de_unidad_de_medida.php';
				foreach ($consulta as $consulta) {
					echo "<option value =" . $consulta['idtipos_um'] . ">" . $consulta['nombre'];
				}
			?>
		</select>
		<input type="submit" name="guardar" value="Guardar">
	</form>
	</div>


</body>
</html>