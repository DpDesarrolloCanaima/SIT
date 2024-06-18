<?php
require "../../config/conexionDBextra.php";
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");

// CONSULTAS DE COMPROBACIÓN
// Serial Cara B
$sqlCaraB = "SELECT serial_cara_b FROM cara_b WHERE fecha_registro = '$fecha'";
$resultadoCaraB = $conexionExtra->query($sqlCaraB);
$numCaraB = $resultadoCaraB->num_rows;
// Serial Memoria Ram
$sqlMR = "SELECT serial_m_r FROM memoria_ram WHERE fecha_registro = '$fecha'";
$resultadoMR = $conexionExtra->query($sqlMR);
$numMR = $resultadoMR->num_rows;
// Serial Cargador
$sqlCargador = "SELECT serial_cargador FROM cargador WHERE fecha_registro = '$fecha'";
$resultadoCargador = $conexionExtra->query($sqlCargador);
$numCargador = $resultadoCargador->num_rows;
// Serial Tarjeta Madre
$sqlTarjetaMadre = "SELECT serial_cara_b FROM cara_b WHERE fecha_registro = '$fecha'";
$resultadoTarjetaMadre = $conexionExtra->query($sqlTarjetaMadre);
$numTarjetaMadre = $resultadoTarjetaMadre->num_rows;
// Serial Pantalla
$sqlPantalla = "SELECT serial_pantalla FROM pantalla WHERE fecha_registro = '$fecha'";
$resultadoPantalla = $conexionExtra->query($sqlPantalla);
$numPantalla = $resultadoPantalla->num_rows;
// Serial disco duro
$sqlDiscoDuro = "SELECT serial_disco FROM disco_duro WHERE fecha_registro = '$fecha'";
$resultadoDiscoDuro = $conexionExtra->query($sqlDiscoDuro);
$numDiscoDuro = $resultadoDiscoDuro->num_rows;
// Serial bateria
$sqlBateria = "SELECT serial_baterias FROM baterias WHERE fecha_registro = '$fecha'";
$resultadoBateria = $conexionExtra->query($sqlBateria);
$numBateria = $resultadoBateria->num_rows;
















?>