<?php
// Datos de ejemplo para la tabla
$estudiantes = array(
    array("Juan", "Pérez", "juan@example.com"),
    array("María", "García", "maria@example.com"),
    array("Carlos", "López", "carlos@example.com")
);
?>


<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
    </tr>
    <?php
    // Generar filas de la tabla con datos de estudiantes
    foreach ($estudiantes as $estudiante) {
        echo "<tr>";
        foreach ($estudiante as $dato) {
            echo "<td>$dato</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
