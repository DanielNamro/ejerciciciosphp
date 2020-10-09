<?php
//aprobechamos para ver un par de funciones para el manejo de variables.
//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false

if(isset($_POST) && !empty($_POST)){
    $n = $_COOKIE['nombre'];
    $a = $_COOKIE['apellido'];
    echo "cookie nombre $n";
    echo "cookie apellido $a";
}
 else {
     echo "No hemos recibido nada!";
}
