<?php
require "../config/conexionDBextra.php";
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");

// $rowCantidad = mysqli_fetch_assoc($resultadoCantidadVenta);
	// $Cantidad = $rowCantidad['numero'];

// CONSULTAS DE COMPROBACIÓN
// Serial Cara B
$sqlCaraB = "SELECT serial_cara_b FROM cara_b WHERE fecha_registro = '$fecha'";
$resultadoCaraB = $conexionExtra->query($sqlCaraB);
$rowCaraB = mysqli_fetch_assoc($resultadoCaraB);
if ($rowCaraB == '') {
    echo "Ningun registro";
}else {
    $serialCaraBDB = $rowCaraB['serial_cara_b'];
}
// Serial Memoria Ram
$sqlMR = "SELECT serial_m_r FROM memoria_ram WHERE fecha_registro = '$fecha'";
$resultadoMR = $conexionExtra->query($sqlMR);
$rowMR = mysqli_fetch_assoc($resultadoCaraB);
if ($rowMR == '') {
    echo "Ningun registro";
}else {
    
    $serialMRdb = $rowMR['serial_m_r'];
}
// Serial Cargador
$sqlCargador = "SELECT serial_cargador FROM cargador WHERE fecha_registro = '$fecha'";
$resultadoCargador = $conexionExtra->query($sqlCargador);
$rowCargador = mysqli_fetch_assoc($resultadoCargador);
if ($rowCargador == '') {
    echo "Ningun registro";
}else {
    
    $serialCargadorDB = $rowCargador['serial_cargador'];
}
// Serial Tarjeta Madre
$sqlTarjetaMadre = "SELECT serial_cara_b FROM cara_b WHERE fecha_registro = '$fecha'";
$resultadoTarjetaMadre = $conexionExtra->query($sqlTarjetaMadre);
$rowTarjetaMadre = mysqli_fetch_assoc($resultadoTarjetaMadre);
if ($rowTarjetaMadre == '') {
    echo "Ningun registro";
}else {
    
    $serialrowTarjetaMadre = $rowTarjetaMadre['serial_cara_b'];
}
// Serial Pantalla
$sqlPantalla = "SELECT serial_pantalla FROM pantalla WHERE fecha_registro = '$fecha'";
$resultadoPantalla = $conexionExtra->query($sqlPantalla);
$rowPantalla = mysqli_fetch_assoc($resultadoPantalla);
if ($rowPantalla == '') {
    echo "Ningun registro";
}else {
    
    $serialPantallaDB = $rowPantalla['serial_pantalla'];
}
// Serial disco duro
$sqlDiscoDuro = "SELECT serial_disco FROM disco_duro WHERE fecha_registro = '$fecha'";
$resultadoDiscoDuro = $conexionExtra->query($sqlDiscoDuro);
$rowDiscoDuro = mysqli_fetch_assoc($resultadoDiscoDuro);
if ($rowDiscoDuro == '') {
    echo "Ningun registro";
}else {
    
    $serialDiscoDuroDB = $rowDiscoDuro['serial_disco'];
    echo $serialDiscoDuroDB;
}
// Serial bateria
$sqlBateria = "SELECT serial_baterias FROM baterias WHERE fecha_registro = '$fecha'";
$resultadoBateria = $conexionExtra->query($sqlBateria);
$rowBateria = mysqli_fetch_assoc($resultadoBateria);
if ($rowBateria == '') {
    echo "Ningun registro";
}else {
    
    $serialBateriaDB = $rowBateria['serial_disco'];
    echo $serialBateriaDB;
}














?>