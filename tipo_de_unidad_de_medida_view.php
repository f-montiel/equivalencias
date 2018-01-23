<!DOCTYPE html>
<html>
	<head>
		<title>Tipos de UM</title>
		<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
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
			<h3>Agregar Nuevo Tipo de Unidad de Medida</h3>
			<form action="tipo_de_unidad_de_medida_guardar.php" method="POST">
				<label>Unidad de Medida</label>
				<input type="text" name="tipoUm">
				<input type="submit" class="btn btn-info" name="Guardar" value="Guardar">

				<a href="tipo_de_unidad_de_medida.php" class="btn btn-info">Pagina Principal</a>

			</form>
		</div>
	</body>
</html>