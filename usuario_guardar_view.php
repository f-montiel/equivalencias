<!DOCTYPE html>
<html>
<head>
	<title>Agregar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Agregar Usuario</h1>
		</div>
	</nav>
	<div class="container">
		<form action="usuario_guardar.php" method="POST">
			<label>Usuario</label>
			<input type="text" name="usuario">
			<label>Contraseña</label>
			<input type="password" name="pass">
			<input class="btn btn-info" type="submit" name="guardar" value="guardar">
		</form>
	</div>

</body>
</html>