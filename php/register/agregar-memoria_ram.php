<?php
    include "../../config/conexionDBextra.php";

    if (isset($_POST)) {
        $serialMemoriaRam = $_POST['serialMemoriaRam'];
        $fechaActual = $_POST['fecha_actual'];
        // Consulta a la base de datos para el registro de la memoria ram 
        $query = "INSERT INTO memoria_ram (id_memoria_ram, serial_m_r, fecha_registrada) VALUES (NULL, '$serialMemoriaRam', '$fechaActual')";
        $resultadoQuery = mysqli_query($conexion,$query);
        if (!$resultadoQuery) {
            die("Ocurrio un error en el registro". mysqli_error($conexion));
        }

        echo "Registro realizado.";

    }

?>