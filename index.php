<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<h1>Equivalencias</h1>
		</div>
	</nav>
	<div class="container">
	<form action="ingresar.php" method="POST">
		<label>Usuario</label>
		<input type="text" name="usuario">
		<label>Contraseña</label>
		<input type="password" name="pass">
		<input class="btn btn-info" type="submit" name="ingresar" value="Ingresar">
		<a class="btn btn-info" href="usuario_guardar_view.php">Registrar</a>
	</form>
	</div>


</body>
</html>