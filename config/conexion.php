<?php

$mysqli = new mysqli("localhost", "root", "", "sit");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);

}


?>
