<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>
</head>

<body>
    <?php
$equipo = ["lakers", "bulls", "actureños", "mozambique", "elbarrio"];
    ?>

    <ul>
    <?php
    foreach ($equipo as $element) {
        echo '<li>' . $element . '</li>';
    }
?>
    </ul>

    <ul>
    <?php
    foreach ($equipo as $postion=>$elenent) {
        echo '<li>' . $postion . '</li>';
    }
?>
    </ul>
</body>

</html>