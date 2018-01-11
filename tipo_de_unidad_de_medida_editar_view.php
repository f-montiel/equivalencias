<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Editar Tipo de Unidad de Medida</h1>
		</div>
	</nav>
	
	<div class="container">
		<form action="tipo_de_unidad_de_medida_update.php" method="POST">
			<label>Unidad de Medida</label>
			<input type="text" name="tipoUm" value= <?php foreach ($tipo_um as $nombre) {
			echo $nombre['nombre'];
			} ?>>
			<input type="hidden" name="idtipos_um" value=<?php echo $idtipos_um;?>>
			<input type="submit" class="btn btn-info" name="Guardar" value="Guardar">
			<a href="index.php" class="btn btn-info">Pagina Principal</a>
		</form>
	</div>


</body>
</html>