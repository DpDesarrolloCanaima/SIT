<?php

<<<<<<< HEAD
$mysqli = new mysqli("10.10.5.28","sistema","123456", "oac_prueba");

=======

<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "SIT.122");
=======
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
=======
$mysqli = new mysqli("10.10.5.28","sistema","123456", "oac_prueba");
>>>>>>> 7a05fc65ccc898eb42a3af403d7319850c78d0e8
>>>>>>> 8db22ede027bf21d88bd09b6db9e82d559149392
>>>>>>> a51610b8d0ff5ba9ec847b1b6e2feafe1231089f

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
