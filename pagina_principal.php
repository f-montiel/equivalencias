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
<<<<<<< HEAD
			<h1>Equivalencias</h1>
=======
			<div class="row">
				<div class="col">
					<h1>Equivalencias</h1>
				</div>
				<div class="col">
					<h4>Usuario: <?php echo $usuario_session; ?></h4>
				</div>
			</div>
>>>>>>> 8460bca965059d38680cb0d304bc7c85e6cc3220
		</div>
	</nav>
	<div class="container">
		<div class="list-group">
			<?php
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
			<a href="cerrar_session.php" class="btn btn-info">
			Cerrar Sesion
			</a>
		</div>
	</div>
</body>
</html>



