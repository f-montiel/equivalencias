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
			echo $resultado;
			 foreach ($unidadesDeMedida as  $detalle) {
				echo " " . $detalle['nombre'];
			} 	
		?>
		
	</h3>

	<a href="index.php" class="btn btn-info">Pagina Principal</a>

	</div>
</body>
</html>