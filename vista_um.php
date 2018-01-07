<!DOCTYPE html>
<html>
<head>
	<title>Equivalencias</title>
</head>
<body>
	<form action="um.php" method="POST">
		<label>Unidad de Medida</label>
		<input type="text" name="nombre">
		<label>Valor</label>
		<input type="number" name="valor">
		<select name="tipo_um">
			<?php
				include 'connection.php';
				$pdo = connect();
				$consulta = $pdo->prepare('SELECT idtipos_um, nombres FROM equivalencias.tipos_um');
				$consulta->execute();
				//$resultado = $consulta->fecthAll();
								
				foreach ($consulta as $consulta) {
					echo "<option value =" . $consulta['idtipos_um'] . ">" . $consulta['nombres'];
				}
			?>
		</select>
		<input type="submit" name="guardar" value="Guardar">
	</form>


</body>
</html>