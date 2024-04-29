<?php

$conexion = new mysqli("10.10.5.28", "sistema", "123456", "sit_produccion");

if ($conexion->connect_error) {
    die("Conexion Fallo:" . $conexion->connect_error);

}


?>