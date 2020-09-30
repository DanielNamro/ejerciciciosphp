<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejer12</title>
</head>

<body>
    <h2>Formulario</h2>
    <form method="POST" action="12.php">
        <label>Nombre</label><input type="text" value="" name="Nombre" minlength="3"><br>

        <input type="submit" value="enviar">
    </form>

    <h2>Datos enviados</h2>
    <?php
    if (isset($_POST) && !empty($_POST)) {
        
        echo "Un saludo a:  $_POST[Nombre] <hr>";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
    } else {
        echo " $_POST[Nombre] no es correcto debe tener 3 caracteres como minimo";
    }
    ?>
</body>

</html>