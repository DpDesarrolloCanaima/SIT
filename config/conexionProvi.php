<?php
<<<<<<< HEAD
$mysqli = new mysqli("localhost", "root", "", "oac_prueba");
=======
>>>>>>> 1a9b38516d8e9f8431c0106909ec22fb8c8615b8

//$mysqli = new mysqli("localhost", "root", "", "oac_prueba");

$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
