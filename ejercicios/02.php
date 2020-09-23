<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 11);
    echo "<table border=1>";
    $num = 0;
    $number = 1;
    $cont = 0;
    for ($row = 1; $row <= 1; $row++) {
        $number = $number * $num;
        for ($column = 1; $column <= SIZE; $column++) {
            echo "<td>","8*$cont = ", $num, "</td>";
            $cont ++;
            $number = $number + 1;
            $num = $number * 8;
       }
        
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>