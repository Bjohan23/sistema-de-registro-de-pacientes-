<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cita Médica</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Editar Cita Médica</h2>
    <?php
   include("../config/conexion.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Consulta SQL para obtener los datos de la cita médica a editar
        $query = "SELECT * FROM CitasMedicas WHERE CitaID = $id";
        $result = $conexion->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $paciente = $row['PacienteID'];
            $fecha_cita = $row['FechaCita'];
            $estado_pago = $row['EstadoPago'];

            echo '<form method="post" action="actualizar_cita.php">';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            echo '<div class="form-group">';
            echo '<label for="paciente">Paciente:</label>';
            echo '<select class="form-control" id="paciente" name="paciente" required>';
            // Carga la lista de pacientes desde la base de datos, similar a lo que hiciste en el formulario de registro
             // Realiza una consulta para obtener la lista de pacientes
             $query = "SELECT PacienteID, Nombre, Apellido FROM Pacientes";
             $result = $conexion->query($query);

             // Llena las opciones del menú desplegable con los datos de los pacientes
             while ($row = $result->fetch_assoc()) {
                 echo "<option value='" . $row['PacienteID'] . "'>" . $row['Nombre'] . " " . $row['Apellido'] . "</option>";
             }
            echo '</select>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="fecha_cita">Fecha de Cita:</label>';
            echo '<input type="date" class="form-control" id="fecha_cita" name="fecha_cita" value="' . $fecha_cita . '" required>';
            echo '</div>';
            echo '<div class="form-group">';
            echo '<label for="estado_pago">Estado de Pago:</label>';
            echo '<select class="form-control" id="estado_pago" name="estado_pago" required>';
            echo '<option value="Efectivo" ' . ($estado_pago == "Efectivo" ? "selected" : "") . '>Efectivo</option>';
            echo '<option value="Transferencia" ' . ($estado_pago == "Transferencia" ? "selected" : "") . '>Transferencia</option>';
            echo '<option value="Pendiente" ' . ($estado_pago == "Pendiente" ? "selected" : "") . '>Pendiente</option>';
            echo '</select>';
            echo '</div>';
            echo '<button type="submit" class="btn btn-primary">Actualizar Cita</button>';
            echo '</form>';
        } else {
            echo "No se encontró la cita médica.";
        }
    } else {
        echo "ID de cita no proporcionado.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
    ?>
</div>

<!-- Agrega enlaces a los archivos JavaScript de Bootstrap (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
