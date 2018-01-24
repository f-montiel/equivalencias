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
	    <div class="navbar-header">
	      <a class="navbar-brand">Equivalencias</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="tipo_de_unidad_de_medida.php">Home</a></li>
	      <li><a href="configuraciones_view.php">Configuracion</a></li>
	      <li><a href="cerrar_session.php">Cerrar Sesion</a></li>
	    </ul>
	  </div>
	</nav>
	
	<div class="container">
		<h3>Editar Tipo de Unidad de Medida</h3>
		<form action="tipo_de_unidad_de_medida_update.php" method="POST">
			<label> Tipo de Unidad de Medida</label>
			<input type="text" name="tipoUm" value= <?php foreach ($tipo_um as $nombre) {
			echo $nombre['nombre'];
			} ?>>
			<input type="hidden" name="idtipos_um" value=<?php echo $idtipos_um;?>>
			<input type="submit" class="btn btn-info" name="Guardar" value="Guardar">
		</form>
		<?php 
		if (count($unidades_de_medida)) {
			echo '<h3>Unidades de medidas</h3>';
			}
		?>
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