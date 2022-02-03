<?php

include('./conexion.php');

$consulta = "SELECT * FROM prueba";

$accion = mysqli_query($conexion, $consulta);


$i = 1;
while ($r = mysqli_fetch_array($accion)) {
    echo "<tr>
    <td>" . $r['nombre'] . "</td>
    </tr>";
    $i++;
}
