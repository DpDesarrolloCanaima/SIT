<?php


$mysqli = new mysqli("localhost", "danyerbert", "27047631ghots", "oac_prueba");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}