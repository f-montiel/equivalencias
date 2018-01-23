<?php

include 'connection.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['pass'];
$pass = PASSWORD_HASH($contraseña, PASSWORD_BCRYPT);

$guardarUsuario = $pdo->prepare('INSERT INTO equivalencias.users (user_name, pass) VALUES (?, ?)');

$guardarUsuario->execute(array($usuario, $pass));

header('location:index.php');


?>