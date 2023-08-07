<?php


$mysqli = new mysqli("localhost", "root", "", "SIT.122");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}