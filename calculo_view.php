<!DOCTYPE html>
<html>
<head>
	<title>Calculo</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1><?php echo $_GET['nombre']; ?></h1>
	<form action="resultado.php" method="POST">
	<label>Cantidad</label><br>
	<input type="number" name="cantidad">

	<div class="form-group">
      <label for="sel1">Input</label>
      <select class="form-control" id="sel1" name="input">
		<?php 
			foreach ($unidadesDeMedida as $unidadDeMedida) {
					echo "<option value=" . $unidadDeMedida['idunidades_de_medida'] . ">" . $unidadDeMedida['nombre'] . "</option>";
				}
			
		?>
	</select>
	</div>
	<p>a:</p>
	<div class="form-group">
	 <label for="sel2">Output</label>
      <select class="form-control" id="sel2" name="output">
		<?php 
			foreach ($unidadesDeMedida as $unidadDeMedida) {
					echo "<option value=" . $unidadDeMedida['idunidades_de_medida'] . ">" . $unidadDeMedida['nombre'] . "</option>";
				}
			
		?>
	</select>
	</div>

	<input type="submit" name="calcular" value="Calcular">

	</form>
</div>


</body>
</html>