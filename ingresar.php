<?php
include 'connection.php';

$consulta = $pdo->prepare('SELECT pass FROM equivalencias.users WHERE user_name = ?');
$usuario = $_POST['usuario'];
$consulta->execute(array($usuario));
$validacion = $consulta->fetchAll();

$pass = $_POST['pass'];
if (isset($validacion[0]['pass'])) {
	if (PASSWORD_VERIFY($pass, $validacion[0]['pass'])) {
		session_start();
		$_SESSION['user'] = $usuario;

		header('location:tipo_de_unidad_de_medida.php');
	}else{
		echo $error = 'Los datos ingresados no son correctos';
	}

}else{
	echo $error = 'Los datos ingresados no son correctos';
}
?>