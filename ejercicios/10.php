<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>
</head>

<body>
    <?php
$plantilla = array (
    'base'=> 'Tio manu',
    'escolta'=> 'Tio guilla',
    'alero'=> 'Tio angel',
    'alapivot'=> 'Tio javi',
    'pivot'=> 'Tio calitros',
);

foreach ($plantilla as $position => $element) {
   echo "$position" . ": " . "$element" . " , ";
}
?>

</body>

</html>