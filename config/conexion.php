<?php

$conexion = new mysqli("localhost", "danyerbert", "123456", "sit_produccion_provi");

if ($conexion->connect_error) {
    die("Conexion Fallo:" . $conexion->connect_error);

}


?>