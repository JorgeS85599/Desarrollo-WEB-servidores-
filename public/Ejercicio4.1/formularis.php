<?php

require ("../../kernel.php");
$hobbies = ['videojuegos','deporte','bailar','cantar'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['nombre'] === "" || $_POST["fecha"] === date("Y-m-d") || $_POST["fecha"] === ""
        || empty($_POST["genero"])  || ($_FILES['imagen']['type'] !== 'image/jpeg' && $_FILES['imagen']['type'] !== 'image/png'))
    {
        echo "Formulario Incompleto <br>";
    } else{
        $name = basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],"imagen/$name" );
        $arrayDatos = [$_POST['dni'],$_POST['nombre'],$_POST['fecha'],$_POST['genero'],$_POST['hobbies'],$name];
        $query->insert("alumnes",$arrayDatos);
        echo "<a href='tabla.php'>Tabla Alumnos</a>";
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>formulario</title>
    </head>
    <body>
    <h2>Formulario</h2>
    <form method="post" action="formularis.php" enctype="multipart/form-data">
        <label for="dni">Dni: </label>
        <input type="text" id="dni" name="dni" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha"><br>
        <input type="checkbox" id="hombre" name="genero" value="M">
        <label for="hombre">hombre</label><br>
        <input type="checkbox" id="mujer" name="genero" value="F">
        <label for="mujer">mujer</label><br>
        <label for="hobbies">Elige un hobbie:</label>
        <select id="hobbies" name="hobbies">
            <?php foreach ($hobbies as $key => $item2) {?>
                <option value="<?= $key?>"> <?= $item2 ?></option>
            <?php }?>
        </select><br>
        <input type="file" name="imagen" id="imagen"> <br>
        <input type="submit" value="Enviar">
    </form>
    </body>
    </html>
<?php }?>


