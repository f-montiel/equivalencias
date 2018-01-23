<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Resultado</h1>
		</div>
	</nav>
	<div class="container">
	
	<h3><?php
			echo $resultado . ' ' . $tipoUnidadMedida[0][0];
		?>
	</h3>

	<a href="tipo_de_unidad_de_medida.php" class="btn btn-info">Pagina Principal</a>

	</div>
</body>
</html>