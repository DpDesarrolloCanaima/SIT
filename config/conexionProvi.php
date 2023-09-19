<?php
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
=======
>>>>>>> 4a04aa822737219306b6057c6cd8c1af3cc93ffa

//$mysqli = new mysqli("localhost", "root", "", "oac_prueba");

$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
