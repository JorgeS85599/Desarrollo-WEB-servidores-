<?php

$nom = $_GET['nom'];

if (is_null($nom)) {
    $nom = "Jorge";
}

echo "Ejercicio C"."<br>";
echo trim($nom,'/')."<br>";
echo strlen($nom)."<br>";
echo strtoupper($nom)."<br>";
echo strtolower($nom)."<br>";
echo str_ireplace('O',0,$nom)."<br>";
echo substr_count(strtolower($nom),'a')."<br>";
if (stripos(strtolower($nom),'a') != false) {
    echo stripos(strtolower($nom),'a')."<br>";
} else {
    echo "No existe ninguna a en ${nom}"."<br>";
}


$prefix = $_GET['prefix'];

if (!is_null($prefix)) {
    if (stripos($nom,$prefix) === 0) {
        echo "${nom} comienza por ${prefix}"."<br>";
    } else {
        echo "${nom} no comienza por ${prefix}"."<br>";
    }
}

echo "<br>"."Ejercicio D"."<br>";
$url = 'http://username:password@hostname:9090/path?arg=value';
echo parse_url($url,PHP_URL_QUERY)."<br>";
echo parse_url($url,PHP_URL_SCHEME)."<br>";
echo parse_url($url,PHP_URL_USER)."<br>";
echo parse_url($url,PHP_URL_PATH)."<br>";








