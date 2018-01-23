<?php

session_start();
$usuario = $_SESSION['user'];
if (isset($usuario)) {

}else{
	header('location:index.php');
}

?>