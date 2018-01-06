<?php

function connect(){
	return new PDO('mysql:localhost; dbname=equivalencias', 'root', 'root');
}

?>