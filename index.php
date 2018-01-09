<!DOCTYPE html>
<html>
<head>
	<title>Tipos de UM</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<h1>Equivalencias</h1>

	<div class="list-group">
		<?php
			include 'tipo_de_unidad_de_medida.php';
			foreach ($consulta as $consulta) {
					echo "<a href=" . "calculo_view.php" . "?nombre=" . $consulta['nombres'] . " " . "class='list-group-item'>" . $consulta['nombres'] . "</a>";
				}
		?>
	</div>
	<div>
	<a href="unidad_de_medida_view.php">
		<button>Agregar Unidad de Medida</button>
	</a>
	<a href="tipo_de_unidad_de_medida_view.php">
		<button>Agregar Tipo de Unidad de Medida</button>
	</a>
	</div>

</body>
</html>



