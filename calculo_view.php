<!DOCTYPE html>
<html>
<head>
	<title>Calculo</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<h1><?php echo $_GET['nombre']; ?></h1>
		</div>
	</nav>
	<div class="container">
		<form action="resultado.php" method="POST">
		<label>Cantidad</label><br>
		<input type="number" name="cantidad">

		<div class="form-group">
	      <label for="sel1">Input</label>
	      <select class="form-control" id="sel1" name="input">
			<?php 
				foreach ($unidadesDeMedida as $unidadDeMedida) {
						echo "<option value=" . $unidadDeMedida['valor'] . ">" . $unidadDeMedida['nombre'] . "</option>";
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
						echo "<option value=" . $unidadDeMedida['valor'] . ">" . $unidadDeMedida['nombre'] . "</option>";
					}
				
			?>
		</select>
		<input type="hidden" name="idunidad_de_medida" value=<?php echo $unidadesDeMedida[0][0]; ?>>
		</div>

		<input type="submit" class="btn btn-info" name="calcular" value="Calcular">

		<a href="index.php" class="btn btn-info">Pagina Principal</a>

		</form>
	</div>


</body>
</html>