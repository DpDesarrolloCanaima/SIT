<?php
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
=======
//$mysqli = new mysqli("localhost", "danyerbert", "27047631ghots", "oac_prueba");
>>>>>>> 0fe878985ab69ffef1d279ccc2943adbf5570b28

//$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}