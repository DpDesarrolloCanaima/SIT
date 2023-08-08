<?php

<<<<<<< HEAD
<<<<<<< HEAD


$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
=======
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
>>>>>>> c3508c999fd35f7ba58f76911a8533eeb71022e2

=======
$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
>>>>>>> 1f67885b53f59068c8a84d2e674ad6f756806216

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
