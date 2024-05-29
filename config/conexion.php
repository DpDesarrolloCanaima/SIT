<?php

$conexion = new mysqli("localhost", "root", "", "sistema_produccion");

if ($conexion->connect_error) {
    die("Conexion Fallo:" . $conexion->connect_error);

}


?>