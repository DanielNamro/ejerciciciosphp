<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

</head>

<body>
    <h1>UN SALUDO A TODOS</H1>
<?php
foreach($_COOKIE as $cosa){
    echo "$cosa, <br>";
}
?>
<a href="index.php?method=logout"> para acabar</a>



</body>

</html>