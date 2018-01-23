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
			<label> Tipo de Unidad de Medida</label>
			<input type="text" name="tipoUm" value= <?php foreach ($tipo_um as $nombre) {
			echo $nombre['nombre'];
			} ?>>
			<input type="hidden" name="idtipos_um" value=<?php echo $idtipos_um;?>>
			<input type="submit" class="btn btn-info" name="Guardar" value="Guardar">
			<a href="pagina_principal.php" class="btn btn-info">Pagina Principal</a>
		</form>
		<h3>Unidades de medidas</h3>
		<div class="list-group">
			<?php foreach ($unidades_de_medida as $unidades_de_medida) {
				echo "<div class='list-group-item'>" . $unidades_de_medida['nombre'];
				echo "<div class= 'pull-right'><a href=" . "unidad_de_medida_editar.php" . "?nombre=" . $unidades_de_medida['nombre'] . "&idunidades_de_medida=" . $unidades_de_medida['idunidades_de_medida'] . "&valor=" . $unidades_de_medida['valor'] . "> Editar </a>";
				echo "<a href=" . "unidad_de_medida_borrar.php" . "?idunidades_de_medida=" . $unidades_de_medida['idunidades_de_medida'] . "> Borrar </a></div></div>";
			} ?>
		</div >
	</div>


</body>
</html>