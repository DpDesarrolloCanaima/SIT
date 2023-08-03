<?php

	require "config/conexionProvi.php";
	require "fpdf/fpdf.php";

	$sql = "SELECT d.serial_equipo, d.serial_de_cargador, d.pertenencia_del_equipo, d.institucion_educativa, d.institucion_donde_estudia, d.fecha_de_recepcion, d.estado_recepcion_equipo, d.observaciones, d.equipo_reincidio, d.motivo_reincidencia, j.nombre, j.modelo, l.grado, k.origen, m.estatus, b.tipo_de_motivo , t.estado FROM datos_del_dispotivo AS d 
INNER JOIN tipo_de_equipo AS j ON j.id_tipo_de_equipo=d.id_tipo_de_dispositivo
INNER JOIN origen AS k ON k.id_origen = d.id_origen
INNER JOIN grado AS l ON l.id_grado = d.id_grado
INNER JOIN estatus AS m ON m.id_estatus = d.id_estatus
INNER JOIN motivo AS b ON b.id_motivo = d.id_motivo
INNER JOIN tipo_estado AS t ON t.id = d.estado_recepcion_equipo";

$resultado = $mysqli->query($sql);;

	$pdf = new FPDF("L", "mm", "Letter");
	$pdf->AddPage();
	$pdf->SetFont("Arial", "B", 12);
	$pdf->Cell(200, 5,"Dispositivos Entrada", 0, 1, "C");
	
	$pdf->Ln();
	$pdf->Cell(40, 5,"Tipo de Equipo", 1, 0, "C");
	$pdf->Cell(20, 5,"Modelo", 1, 0, "C");
	$pdf->Cell(50, 5,"Serial Del Equipo", 1, 0, "C");
	$pdf->Cell(50, 5,"Serial Del Cargador", 1, 0, "C");
	$pdf->Cell(30, 5,"Pertenencia", 1, 0, "C");
	$pdf->Cell(50, 5,"Institucion Educativa", 1, 0, "C");
	$pdf->Cell(20, 5,"Grado", 1, 0, "C");
	$pdf->Cell(50, 5,"Fecha de Recepcion", 1, 0, "C");
	$pdf->Cell(50, 5,"Estado De Recepcion", 1, 0, "C");
	$pdf->Cell(20, 5,"Falla", 1, 0, "C");
	$pdf->Cell(30, 5,"Origen", 1, 0, "C");
	$pdf->Cell(30, 5,"Estatus", 1, 0, "C");

	


	$pdf-> Output();





?>