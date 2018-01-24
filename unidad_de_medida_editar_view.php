<!DOCTYPE html>
<html>
<head>
	<title>Equivalencias</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
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
		<form action="unidad_de_medida_update.php" method="POST">
			<label>Unidad de Medida</label>
			<input type="text" name="nombre" value=
				<?php 
					foreach ($unidades_de_medida as  $nombre) {
						echo $nombre['nombre'];
					}  
				?>
			>
			<label>Valor</label>
			<input type="number" name="valor" value=
				<?php 
					foreach ($unidades_de_medida as $valor) {
						echo $valor['valor'];
					}  
				?>
			>
			<input type="hidden" name="idunidades_de_medida" value=<?php echo $idunidades_de_medida; ?>>
			<input type="hidden" name="idtipos_um" value=
				<?php 
					foreach ($unidades_de_medida as  $idtipos_um) {
						echo $idtipos_um['idtipos_um'];
					}
				?>
			>
			<input type="submit" class="btn btn-info" name="guardar" value="Guardar">
		</form>
	</div>


</body>
</html>