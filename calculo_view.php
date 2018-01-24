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
		<h3><?php echo $nombreTipoUm; ?></h3>
		<form action="resultado.php" method="POST">
			<label>Cantidad</label><br>
			<input type="number" name="cantidad">

			<div class="form-group">
		    	<label>Input</label>
		    	<select class="form-control" name="input">

		      	<?php 
		      	/*  ----NO PUDE PUDE USAR EL FOREACH DE ESTA MANERA----

		      	 foreach ($unidadesDeMedida as $unidadDeMedidaInput): ?>
		      		<option value="<?= $unidadDeMedidaInput['valor'] ?>"><?= $unidadDeMedidaInput ?>['nombre']</option>;
		      	<?php endforeach */ ?>
				<?php
				foreach ($unidadesDeMedida as $unidadDeMedidaInput) {
						echo "<option value=" . $unidadDeMedidaInput['valor'] . ">" . $unidadDeMedidaInput['nombre'] . "</option>";
					}				
				?>
				</select>
			</div>
			<p>a:</p>
			<div class="form-group">
			 	<label>Output</label>
		      	<select class="form-control" name="output">
					<?php 
						foreach ($unidadesDeMedida as $unidadDeMedidaOutput) {
								echo "<option value=" . $unidadDeMedidaOutput['valor'] . ">" . $unidadDeMedidaOutput['nombre'] . "</option>";
							}
						
					?>
				</select>
			</div>
			<input type="submit" class="btn btn-info" name="calcular" value="Calcular">
		</form>
	</div>
</body>
</html>