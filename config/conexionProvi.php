<?php

<<<<<<< HEAD
$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
=======
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");


//$mysqlig = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
>>>>>>> 3f3fd3cc8a0df23522532ec9130808c895f6a76d


if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}