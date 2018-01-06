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
				$consulta = $pdo->prepare('SELECT * FROM equivalencias.tipos_um');
				$consulta->execute();
				$idtipos_um = $consulta->fetchAll(PDO::FETCH_COLUMN, 0);
				$nombres = $consulta->fetchAll(PDO::FETCH_COLUMN, 1);
				for ($i=0; $i < 10; $i++) { 					
					echo "<option value =" . $idtipos_um[$i] . ">" . $nombres[$i] . "<option>"; 
				}
			?>
		</select>
		<input type="submit" name="guardar" value="Guardar">
	</form>


</body>
</html>