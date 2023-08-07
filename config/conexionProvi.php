<?php

<<<<<<< HEAD
$mysqli = new mysqli("10.10.5.28","sistema","123456", "oac_prueba");
=======
$mysqli = new mysqli("10.10.5.28", "sistema", "123456", "oac_prueba");
>>>>>>> 123f7625df2065b086adb34eb0fdb17478615fc4

if ($mysqli->connect_error) {
    die("Conexion Fallo:" . $mysqli->connect_error);
}
