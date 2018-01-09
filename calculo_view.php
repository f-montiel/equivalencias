<!DOCTYPE html>
<html>
<head>
	<title>Calculo</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>

	<h1><?php echo $_GET['nombre']; ?></h1>

	<input type="number" name="cantidad">

	<select name="input">
		<?php 
			foreach ($unidadesDeMedida as $unidadDeMedida) {
					echo "<option value=" . $unidadDeMedida['idunidades_de_medida'] . ">" . $unidadDeMedida['nombre'] . "</option>";
				}
			
		?>
	</select>
	<p>a:</p>
	<select name="output">
		<?php 
			foreach ($unidadesDeMedida as $unidadDeMedida) {
					echo "<option value=" . $unidadDeMedida['idunidades_de_medida'] . ">" . $unidadDeMedida['nombre'] . "</option>";
				}
			
		?>
	</select>

	<input type="submit" name="calcular" value="Calcular">



</body>
</html>