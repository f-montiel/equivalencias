<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container">
				<h1>Inicio de Sesion</h1>
			</div>
		</nav>
	<div class="container">
		<form action="sesion.php" method="POST">
			<label>Usuario</label>
			<input type="text" name="user">
			<label>Contraseña</label>
			<input type="password" name="password">
			<input class="btn btn-info" type="submit" name="ingresar" value="Ingresar">
			<a class="btn btn-info" href="user_guardar.php">Registrar</a>
		</form>
	</div>
</body>
</html>