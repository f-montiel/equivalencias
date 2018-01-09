<?php

function connect(){
	return new PDO('mysql:localhost; dbname=equivalencias', 'root', 'root');
}

$pdo = connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>