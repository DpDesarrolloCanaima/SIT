<?php

$mysqli = new mysqli("localhost", "root", "Canaima.123", "oac_prueba");


if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
