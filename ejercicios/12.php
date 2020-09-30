<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejer12</title>
</head>

<body>
    <h2>Formulario</h2>
    <form method="POST" action="12.php">
        <label>Nombre</label><input type="text" value="" name="Nombre" required><br>

        <input type="submit" value="enviar">
    </form>

    <h2>Datos enviados</h2>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Un saludo a:  $_POST[Nombre] <hr>";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
    } else {
        echo "No hemos recibido nada!";
    }
    ?>
</body>

</html>