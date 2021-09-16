<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: azure;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>
<?php

/**
$host = 'localhost';
$dbname = 'test';
$username = 'batoi';
$password = '1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 */


$name = $_GET['name'];
$grettings = 'Hola';

echo $grettings.$name; ?>
    </h2>
</header>
</body>
</html>

