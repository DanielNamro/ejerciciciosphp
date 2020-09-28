<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>
</head>

<body>
    <?php
$equipo = [];
$equipo[0] = "lakers";
$equipo[1] = "bulls";
$equipo[2] = "actureños";
$equipo[3] = "mozambique";
$equipo[4] = "elbarrio";
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