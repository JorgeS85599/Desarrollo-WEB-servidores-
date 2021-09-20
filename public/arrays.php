<?php
$noms = ['Alex','Jorge','Sara','Maria','Juan'];

echo count($noms)."<br>";
echo implode(' ',$noms)."<br>";
print_r(asort($noms));
echo "<br>";
print_r(array_reverse($noms));
echo "<br>";
echo array_search('Jorge',$noms)."<br>";

function imprimirArray($array) {
    echo "<ul>";
    foreach ($array as $element) {
        echo "<li> ${element} </li>";
    }
    echo "</ul>";
}

imprimirArray($noms);

$alumnes = ['Alex' => ['29657841J','Alex',18], 'Jorge' => ['21808437K','Jorge',22], 'Ana' => ['22235478G','Ana',19]];

echo "<table>";
echo "<tr>";
echo "<td> ${alumnes['Alex'][0]} </td>";
echo "<td> ${alumnes['Alex'][1]} </td>";
echo "<td> ${alumnes['Alex'][2]} </td>";
echo "</tr>";
echo "<tr>";
echo "<td> ${alumnes['Jorge'][0]} </td>";
echo "<td> ${alumnes['Jorge'][1]} </td>";
echo "<td> ${alumnes['Jorge'][2]} </td>";
echo "</tr>";
echo "<tr>";
echo "<td> ${alumnes['Ana'][0]} </td>";
echo "<td> ${alumnes['Ana'][1]} </td>";
echo "<td> ${alumnes['Ana'][2]} </td>";
echo "</tr>";
echo "</table>";

$nombres_alumnes = array_column($alumnes,1);
print_r($nombres_alumnes);
echo "<br>";

$palabras_ingles = ['hello' => 'hola', 'dog' => 'perro', 'cat' => 'gato', 'car' => 'coche', 'blue' => 'azul' ,
    'red' => 'rojo', 'green' => 'verde', 'yellow' => 'amarillo', 'black' => 'negro', 'white' => 'blanco'];

echo "<table>";
foreach ($palabras_ingles as $ingles => $espanyol) {
    echo "<tr>";
    echo "<td> ${ingles} </td>";
    echo "<td> ${espanyol} </td>";
    echo "</tr>";
}
echo "</table>";



