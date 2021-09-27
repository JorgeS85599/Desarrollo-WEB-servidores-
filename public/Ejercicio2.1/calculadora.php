<?php

require_once("../../kernel.php");

require("calculadora.view.php");

if (isset($_POST['num1']) || isset($_POST['num2'])) {
    $x = $_POST['num1'];
    $y = $_POST['num2'];
    $operation = $_POST['operacion'];
    if ($x === "" || $y === "" ) {
        echo "Debes de introducir un valor numérico";
    } else {
        echo calculator($x,$y,$operation);
    }
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
