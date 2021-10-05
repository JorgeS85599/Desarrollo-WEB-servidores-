<?php

require_once("../../kernel.php");

require ("team.php");
require ("member.php");
require ("player.php");
require ("trainer.php");


$handle = fopen("EjemploPlantillas.csv", "r");
$data = array();
while ($linea = fgetcsv($handle, 0, ",")) {
    $data[] = $linea;
}
fclose($handle);

$cabeceras = array_shift($data);

$arrayFiltrado = array_filter($data,"esAtletico");

usort($arrayFiltrado, 'sort_by_dorsal');

$arrayJugadores = array();

$equipo = new Team($arrayFiltrado[0][1],$arrayJugadores,0,0,0,0,0,0);

foreach ($arrayFiltrado as $jugador) {
    $player = new Player($jugador[4],$jugador[6],$jugador[9],$jugador[11],$jugador[10],$jugador[17],$jugador[12],$jugador[16],$jugador[18],$jugador[19]);
    $equipo->signPlayer($player);
}

$trainer = new Trainer("Alfonsito","29/05/1978","Uganda",0,0,"Primer Entrenador");
$equipo->signPlayer($trainer);


function sort_by_dorsal ($a, $b) {
    return $a[11] - $b[11];
}


function esAtletico($var) {
    return $var[1] === "Atlético de Madrid";
}

require ("equipo.view.php");

?>

