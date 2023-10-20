<?php
include("../config/conexion.php");

// Obtiene los datos del formulario
$paciente = $_POST['paciente'];
$fecha_cita = $_POST['fecha_cita'];
$estado_pago = $_POST['estado_pago'];

// Consulta SQL para insertar los datos en la tabla de CitasMedicas
$sql = "INSERT INTO CitasMedicas (PacienteID, FechaCita, EstadoPago)
        VALUES ('$paciente', '$fecha_cita', '$estado_pago')";

if ($conexion->query($sql) === TRUE) {
    echo "Cita médica registrada con éxito.";
    header("Location: ../index.php");
} else {
    echo "Error al registrar la cita médica: " . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
