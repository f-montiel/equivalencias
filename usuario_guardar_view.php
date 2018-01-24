<!DOCTYPE html>
<html>
<head>
	<title>Agregar Usuario</title>
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
		<h3>Agregar Usuario</h3>
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