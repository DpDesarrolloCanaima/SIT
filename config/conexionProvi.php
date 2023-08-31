<?php
//$mysqli = new mysqli("localhost", "root", "", "oac_prueba");

$mysqli = new mysqli("localhost", "root", "", "oac_prueba 2");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
