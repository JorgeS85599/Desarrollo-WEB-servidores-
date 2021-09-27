<?php
$hobbies = ['videojuegos','deporte','bailar','cantar'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['nombre'] === "" || $_POST["birthday"] === date("Y-m-d") || $_POST["birthday"] === ""
        || empty($_POST["genero"])  || $_FILES['imagen']['type'] !== 'image/jpeg' )
    {
        echo "Formulario Incompleto <br>";
    } else{
        $name = basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'],"imagen/$name" );
        echo "<br>Formulario Rellenado <br>" . "<br>";
        echo  "Nombre: " . $_POST['nombre'] ."<br>";
        echo  "Cumpleaños: " . $_POST['fecha'] ."<br>";
        echo  "Genero: " . $_POST['genero'] ."<br>";
        echo  "Hobbie: " . $_POST['hobbies'] ."<br>";
        echo  "<img src='imagen/$name' alt='imagen' width=\"50\" height=\"60\">" ;
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
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha"><br>
        <input type="checkbox" id="hombre" name="genero" value="hombre">
        <label for="hombre">hombre</label><br>
        <input type="checkbox" id="mujer" name="genero" value="mujer">
        <label for="mujer">mujer</label><br>
        <label for="hobbies">Elige un hobbie:</label>
        <select id="hobbies" name="hobbies">
            <?php foreach ($hobbies as $item2) {?>
                <option value="<?= $item2?>"> <?= $item2 ?></option>
            <?php }?>
        </select><br>
        <input type="file" name="imagen" id="imagen"> <br>
        <input type="submit" value="Enviar">
    </form>
    </body>
    </html>
<?php }?>


