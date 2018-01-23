<!DOCTYPE html>
<html>
	<head>
		<title>Tipos de UM</title>
		<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<h1>Agregar Nuevo Tipo de Unidad de Medida</h1>
			</div>
		</nav>
		<div class="container">
			<form action="tipo_de_unidad_de_medida_guardar.php" method="POST">
				<label>Unidad de Medida</label>
				<input type="text" name="tipoUm">
				<input type="submit" class="btn btn-info" name="Guardar" value="Guardar">
				<a href="tipo_de_unidad_de_medida.php" class="btn btn-info">Pagina Principal</a>
			</form>
		</div>
	</body>
</html>