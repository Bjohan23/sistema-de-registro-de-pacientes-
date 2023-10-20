<?php
include_once("../config/conexion.php");

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

// Consulta SQL para insertar los datos en la tabla de Pacientes
$sql = "INSERT INTO Pacientes (Nombre, Apellido, Telefono, DNI, Direccion, CorreoElectronico)
VALUES ('$nombre', '$apellido', '$telefono', '$dni', '$direccion', '$correo')";

if ($conexion->query($sql) === TRUE) {
    echo "Paciente registrado con éxito.";
    header("Location: citasmedicas.php");
} else {
    echo "Error al registrar al paciente: " . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
