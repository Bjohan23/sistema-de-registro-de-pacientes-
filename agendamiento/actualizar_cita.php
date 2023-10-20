<?php

include("../config/conexion.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $paciente = $_POST['paciente'];
    $fecha_cita = $_POST['fecha_cita'];
    $estado_pago = $_POST['estado_pago'];

    // Consulta SQL para actualizar los datos de la cita médica
    $sql = "UPDATE CitasMedicas SET PacienteID = $paciente, FechaCita = '$fecha_cita', EstadoPago = '$estado_pago' WHERE CitaID = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Cita médica actualizada con éxito.";
        header("Location: ../index.php");
    } else {
        echo "Error al actualizar la cita médica: " . $conexion->error;
    }
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
