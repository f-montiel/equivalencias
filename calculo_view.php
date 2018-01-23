<!DOCTYPE html>
<html>
<head>
	<title>Calculo</title>
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
		<h3><?php echo $_GET['nombre']; ?></h3>
		<form action="resultado.php" method="POST">
		<label>Cantidad</label><br>
		<input type="number" name="cantidad">

		<div class="form-group">
	      <label for="sel1">Input</label>
	      <select class="form-control" id="sel1" name="input">
			<?php 
				foreach ($unidadesDeMedida as $unidadDeMedida) {
						echo "<option value=" . $unidadDeMedida['valor'] . ">" . $unidadDeMedida['nombre'] . "</option>";
					}
				
			?>
		</select>
		</div>
		<p>a:</p>
		<div class="form-group">
		 <label for="sel2">Output</label>
	      <select class="form-control" id="sel2" name="output">
			<?php 
				foreach ($unidadesDeMedida as $valores) {
						echo "<option value=" . $valores['valor'] . ">" . $valores['nombre'] . "</option>";
					}
				
			?>
		</select>
		</div>
		<input type="submit" class="btn btn-info" name="calcular" value="Calcular">
	</form>
	</div>


</body>
</html>