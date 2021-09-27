<?php

$handle = fopen("EjemploPlantillas.csv", "r");
$data = array();
while ($linea = fgetcsv($handle, 0, ",")) {
    $data[] = $linea;
}
fclose($handle);

$cabeceras = array_shift($data);

$arrayFiltrado = array_filter($data,"esAtletico");

usort($arrayFiltrado, 'sort_by_dorsal');

array_unshift($arrayFiltrado,$cabeceras);

function sort_by_dorsal ($a, $b) {
    return $a[11] - $b[11];
}


function esAtletico($var) {
    return $var[1] === "Atlético de Madrid";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabla Jugadores</title>
</head>
<body>
<h2>Jugadores Atlético de Madrid</h2>
<table>
    <?php foreach ($arrayFiltrado as $jugador) { ?>
    <tr>
        <td><?= $jugador[4] ?></td>
        <td><?= $jugador[7] ?></td>
        <td><?= $jugador[9] ?></td>
        <td><?= $jugador[11] ?></td>
        <td><?= $jugador[10] ?></td>
        <td><?= $jugador[17] ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
