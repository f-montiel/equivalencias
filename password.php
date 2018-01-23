<?php

$password = 'Montiel';

$hash = PASSWORD_HASH($password, PASSWORD_BCRYPT);

//echo $hash;
if (PASSWORD_VERIFY('Montiel', $hash)) {
	echo 'la contraseña es correcta';
}else{
	echo 'la contraseña es incorrecta';
}

?>


