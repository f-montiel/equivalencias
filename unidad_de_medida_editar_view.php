<!DOCTYPE html>
<html>
<head>
	<title>Equivalencias</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Agregar Nueva Unidad de Medida</h1>
		</div>
	</nav>

	<div class="container">
		<form action="unidad_de_medida_update.php" method="POST">
			<label>Unidad de Medida</label>
			<input type="text" name="nombre" value=
				<?php 
					foreach ($consulta as  $nombre) {
						echo $nombre['nombre'];
					}  
				?>
			>
			<label>Valor</label>
			<input type="number" name="valor" value=
				<?php 
					foreach ($consulta as $valor) {
						echo $valor['valor'];
					}  
				?>
			>
			<label>Tipo de Unidad de Medida</label>
			<select name="idunidades_de_medida" required="true" value= 
				<?php
					foreach ($consulta as  $idtipos_um) {
						echo $idtipos_um['idtipos_um']; 	
					} 
				?>
			>
				<option>--Seleccione tipo de U.M.</option>
				<?php
					include 'tipo_de_unidad_de_medida.php';
					foreach ($consulta as $tipo_de_unidad_de_medida) {
						echo "<option value =" . $tipo_de_unidad_de_medida['idtipos_um'] . ">" . $tipo_de_unidad_de_medida['nombre'] . "</option>";
					}
				?>
			</select>
			<input type="submit" class="btn btn-info" name="guardar" value="Guardar">
			<a href="index.php" class="btn btn-info">Pagina Principal</a>
		</form>
	</div>


</body>
</html>