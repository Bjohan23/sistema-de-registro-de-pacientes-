<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Citas Médicas</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Registro de Citas Médicas</h2>
    <form method="post" action="guardar_cita.php">
        <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select class="form-control" id="paciente" name="paciente" required>
                <!-- Aquí debes cargar dinámicamente la lista de pacientes desde la base de datos -->
                <!-- Puedes usar PHP para generar las opciones del menú desplegable -->
                <?php
                include("../config/conexion.php");

                // Realiza una consulta para obtener la lista de pacientes
                $query = "SELECT PacienteID, Nombre, Apellido FROM Pacientes";
                $result = $conexion->query($query);

                // Llena las opciones del menú desplegable con los datos de los pacientes
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['PacienteID'] . "'>" . $row['Nombre'] . " " . $row['Apellido'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_cita">Fecha de Cita:</label>
            <input type="date" class="form-control" id="fecha_cita" name="fecha_cita" required>
        </div>
        <div class="form-group">
            <label for="estado_pago">Estado de Pago:</label>
            <select class="form-control" id="estado_pago" name="estado_pago" required>
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>
                <option value="Pendiente">Pendiente</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cita</button>
    </form>
</div>

<!-- Agrega enlaces a los archivos JavaScript de Bootstrap (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
