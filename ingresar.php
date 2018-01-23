<?php
include 'connection.php';

$consulta = $pdo->prepare('SELECT pass FROM equivalencias.users WHERE user_name = ?');
$usuario = $_POST['usuario'];
$consulta->execute(array($usuario));
$validacion = $consulta->fetchAll();
$password = $_POST['pass'];

if (PASSWORD_VERIFY($password, $validacion[0]['pass'])) {
	header('location:pagina_principal.php');
}else{
	echo $error = 'Los datos ingresados no son correctos';
}
?>