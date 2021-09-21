<?php

function contrasenyaSegura($contrasenya) {
    if (preg_match('/^(?=.*\d)(?=.*[\u002d|\u005f|\u003d|\u002a|\u002b|\u0024|\u0040|\u00f7])(?=.*[A-Z])(?=.*[a-z])\S{8,}$/', $contrasenya))
    {
        return true;
    } else {
        return false;
    }
}

function insert($nom_taula,$valors) {
    $campos = implode(",",array_keys($valors));
    $valores = implode("\",\"",$valors);
    $sentencia_inicial = 'insert into %s (%s) values ("%s")';
    $sentencia = sprintf($sentencia_inicial,$nom_taula,$campos,$valores);
    return $sentencia;
}

function calculator($numA,$numB,$operation) {
    if ($operation != 'suma' && $operation != 'resta' && $operation != 'multiplicacion' &&
    $operation != 'division' && is_null($operation)) {
        echo "Debes de introducir una operacion correcta";
    } else {
        return $operation($numA,$numB);
    }

}

function suma($numA,$numB) {
    return $numA + $numB;
}

function resta($numA,$numB) {
    return $numA - $numB;
}

function multiplicacion($numA,$numB) {
    return $numA * $numB;
}

function division($numA,$numB) {
    return $numA / $numB;
}