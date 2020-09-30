<?php



if($_POST["signo"] == "+"){
    $solu = $_POST["num1"] + $_POST["num2"] ;
}
else if($_POST["signo"] == "-"){
    $solu = $_POST["num1"] - $_POST["num2"] ;
}

else if($_POST["signo"] == "*"){
    $solu = $_POST["num1"] * $_POST["num2"] ;
}

else if($_POST["signo"] == "/"){
    $solu = $_POST["num1"] / $_POST["num2"] ;
}

echo " el resultado es: $solu"
?>