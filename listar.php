<?php
include("conexion.php");
$con = conexion();

$query = "SELECT * FROM persona";
$result = pg_query($con, $query);
?>

<!doctype html>
<html lang="es">
<head>
    <title>Listado de Registros</title>
    <!-- Agrega tus meta etiquetas y enlaces a hojas de estilo aquí si es necesario -->
</head>
<body>
    <div class="container">
        <h1>Listado de Registros</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nro Documento</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>"; // Cambia 'id' por el nombre correcto de la columna en tu tabla.
                echo "<td>" . $row['nro_documento'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellidos'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['celular'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
