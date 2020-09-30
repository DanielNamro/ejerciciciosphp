<?php
//aprobechamos para ver un par de funciones para el manejo de variables.
//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">';
if(isset($_POST) && !empty($_POST)){
    echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
    echo "Titulo:  $_POST[Titulo] <hr>";
    echo "Autor:  $_POST[Autor] <hr>";
    echo "Editorial:  $_POST[Editorial] <hr>";
    echo "Paginas:  $_POST[Paginas] <hr>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
}
 else {
     echo "No hemos recibido nada!";
}

