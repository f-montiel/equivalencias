<!DOCTYPE html>
<html>
	<head>
		<title>Tipos de UM</title>
		<link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
	</head>
	<body>
		<form class="form-inline" action="">
			<div class="form-group">
				<label>Unidad de medida de origen</label>
				<input type="text" name="um_origen">				
			</div>
			<div class="form-group">
				<label>Unidad de medida destino</label>
				<input type="text" name="um_calculo">
			</div>
			<div class="form-group">
				<input type="submit" name="calcular" value="Calcular">
			</div>



		</form>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<a href="vista_um.php">
						<button type="button" class="btn btn-primary">Agregar Unidad de Medida</button>
					</a>
				</div>
				<div class="col-xs-2">
					<a href="vista_tipos_um.php">
						<button type="button" class="btn btn-primary">Agregar Tipo de Unidad de Medida</button>
					</a>
				</div>
			</div>
		</div>

	</body>
</html>



