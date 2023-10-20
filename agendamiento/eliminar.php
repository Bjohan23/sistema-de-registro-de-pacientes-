<?php
include("../config/conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar la cita médica
    $sql = "DELETE FROM CitasMedicas WHERE CitaID = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Cita médica eliminada con éxito.";
        header("Location: ../index.php");
    } else {
        echo "Error al eliminar la cita médica: " . $conexion->error;
    }
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
