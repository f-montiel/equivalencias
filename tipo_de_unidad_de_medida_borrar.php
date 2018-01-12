<?php
include 'connection.php';

$consulta = $pdo->prepare("DELETE FROM equivalencias.tipos_um WHERE idtipos_um = ?");
$tipoUm = $_GET['idtipos_um'];

try {
$consulta->execute(array("$tipoUm"));
} catch(Exception $consulta) {
  echo 'Este Tipo de Unidad de Medida no se puede borrar';
} 

header('location:index.php');

// Ver con Edu como agregar vista con mensajes de borrado o del catch

?>