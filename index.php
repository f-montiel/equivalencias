<!DOCTYPE html>
<html>
<head>
	<title>Tipos de UM</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>Equivalencias</h1>

	<div class="list-group">
		<?php
			include 'tipo_de_unidad_de_medida.php';
			foreach ($consulta as $consulta) {
					echo "<a href=" . "calculo.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . " " . "class='list-group-item'>" . $consulta['nombre'] . "</a>";
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



