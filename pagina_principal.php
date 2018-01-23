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
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Equivalencias</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="tipo_de_unidad_de_medida.php">Home</a></li>
	      <!--<li><a href="#"><?php echo $usuario_session; ?></a></li>-->
	      <li><a href="configuraciones_view.php">Configuracion</a></li>
	      <li><a href="cerrar_session.php">Cerrar Sesion</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<h3>Tipos de Unidades de Medida</h3>
		<div class="list-group">
			<?php
				foreach ($tipos_um as $consulta) {
					echo "<div class='list-group-item'>" . $consulta['nombre'];
					echo "<div class= 'pull-right'><a href=" . "calculo.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Calcular </a>"; 
					echo "<a href=" . "tipo_de_unidad_de_medida_editar.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Editar </a>";
					echo "<a href=" . "tipo_de_unidad_de_medida_borrar.php" . "?nombre=" . $consulta['nombre'] . "&" . "idtipos_um=" . $consulta['idtipos_um'] . "> Borrar </a></div></div>"; 
				}
			?>
		</div>
	</div>
</body>
</html>



