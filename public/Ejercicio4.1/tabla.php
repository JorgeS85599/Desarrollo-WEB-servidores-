<?php

require ("../../kernel.php");


    $mens = $query->selectAll("alumnes");
    echo "<table border='1 '>";
    foreach ($mens->fetchAll(PDO::FETCH_OBJ) as $usu) {
        echo "<tr>";
        echo "<td>" . $usu->nom . "</td>";
        echo "<td>" . $usu->dni . "</td>";
        echo "<td>" . $usu->dataNaixement . "</td>";
        echo "<td>" . $usu->sexe . "</td>";
        echo "<td>" . $usu->hobby . "</td>";
        echo '<td> <img src="imagen/'. $usu->foto . '" width="50" height="50"></td>';
        echo "</tr>";

    }
    echo "<a href='formularis.php'>Añadir Alumno</a>";

