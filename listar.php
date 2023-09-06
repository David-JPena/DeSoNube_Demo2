<?php
// Incluye la función de conexión
include("conexion.php");

// Realiza la conexión a PostgreSQL
$db = conexion();

if (!$db) {
    die("Error en la conexión a la base de datos PostgreSQL.");
}

// Realiza una consulta SQL para obtener todos los registros
$query = "SELECT * FROM persona"; // Reemplaza 'tu_tabla' con el nombre de tu tabla en la base de datos.
$result = pg_query($db, $query);

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
                // Itera a través de los registros y muestra cada fila en la tabla
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['doc'] . "</td>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['ape'] . "</td>";
                    echo "<td>" . $row['dir'] . "</td>";
                    echo "<td>" . $row['cel'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
