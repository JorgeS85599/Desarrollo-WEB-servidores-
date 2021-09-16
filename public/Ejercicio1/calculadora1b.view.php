<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h3>
        <?php
        print_r($_GET);
        echo "<br>La suma es: ".$suma;
        echo "<br>La resta es: ".$resta;
        echo "<br>La multiplicación es: ".$mult;
        echo "<br>La división es: ".$div."<br>";
        print_r($_SERVER['SERVER_ADDR']);
        echo "<br>";
        print_r($_SERVER['QUERY_STRING']);
        echo "<br>";
        print_r($_SERVER['SCRIPT_FILENAME']);
        ?>
    </h3>
</body>
</html>





