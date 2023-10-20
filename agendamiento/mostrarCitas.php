<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas Médicas</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Lista de Citas Médicas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Fecha de Cita</th>
                <th>Estado de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
           include("../config/conexion.php");
            // Realiza una consulta para obtener la lista de citas médicas
            $query = "SELECT CitasMedicas.CitaID, Pacientes.Nombre AS Paciente, CitasMedicas.FechaCita, CitasMedicas.EstadoPago 
                      FROM CitasMedicas 
                      INNER JOIN Pacientes ON CitasMedicas.PacienteID = Pacientes.PacienteID";
            $result = $conexion->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['CitaID'] . "</td>";
                    echo "<td>" . $row['Paciente'] . "</td>";
                    echo "<td>" . $row['FechaCita'] . "</td>";
                    echo "<td>" . $row['EstadoPago'] . "</td>";
                    echo "<td>
                            <a href='editar.php?id=" . $row['CitaID'] . "'>Editar</a> |
                            <a href='eliminar.php?id=" . $row['CitaID'] . "'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay citas médicas registradas.</td></tr>";
            }

            // Cierra la conexión a la base de datos
            $conexion->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Agrega enlaces a los archivos JavaScript de Bootstrap (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
