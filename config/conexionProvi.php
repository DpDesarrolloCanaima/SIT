<?php

//Manera local
//$mysqli = new mysqli("localhost", "root", "", "sit");

//Manera con servidor

$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "sit");

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);

}



