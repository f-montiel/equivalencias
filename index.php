<!DOCTYPE html>
<html>
<head>
	<title>Tipos de UM</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Equivalencias</h1>
		</div>
	</nav>
	<div class="container">
		<div class="list-group">
			<?php
				include 'tipo_de_unidad_de_medida.php';
				foreach ($consulta as $consulta) {
					echo "<div class='list-group-item'>" . $consulta['nombre'];
					echo "<div class= 'pull-right'><a href=" . "calculo.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Calcular </a>"; 
					echo "<a href=" . "tipo_de_unidad_de_medida_editar.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Editar </a>";
					echo "<a href=" . "tipo_de_unidad_de_medida_borrar.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Borrar </a></div></div>"; 
				}
			?>
		</div>
		<div>
			<a href="unidad_de_medida_view.php" class="btn btn-info">
			Agregar Unidad de Medida
			</a>
			<a href="tipo_de_unidad_de_medida_view.php" class="btn btn-info">
			Agregar Tipo de Unidad de Medida
			</a>
		</div>
	</div>

</body>
</html>



