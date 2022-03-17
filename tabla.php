<?php

include('./conexion.php');

$consulta = "SELECT * FROM primg21";

$accion = mysqli_query($conexion, $consulta);


$i = 1;
while ($r = mysqli_fetch_array($accion)) {
    echo "
            <table>
            <thead>
                <tr>
                    <th>Clave</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>" . $r['CV_CCT'] . "</td>
                    <td>" . $r['FECHA_ENTREGA'] . "</td>
                    <td>" . $r['E1546'] . "</td>
                </tr>
            </tbody>
        </table>";
    $i++;
}
