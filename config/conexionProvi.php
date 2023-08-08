<?php

<<<<<<< HEAD


$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
=======
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
>>>>>>> c3508c999fd35f7ba58f76911a8533eeb71022e2


if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}