<!DOCTYPE html>
<html lang="en">
<head>
    <title>formulario</title>
</head>
<body>
<h2>Calculadora</h2>
<form method="post" action="calculadora.php">
    <label for="num1">Número 1:</label>
    <input type="number" id="num1" name="num1"><br>
    <label for="num2">Número 2:</label>
    <input type="number" id="num2" name="num2"><br>
    <select id="operacion" name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>

