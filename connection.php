<?php

function connect(){
	return new PDO('mysql:host=138.68.21.214; dbname=equivalencias', 'montiel', 'montiel');
}

$pdo = connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>