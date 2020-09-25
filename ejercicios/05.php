<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>
</head>

<body>
    <?php
    define('DIVISOR', 32);
     $primo = true;

    for($i = 2; $i < DIVISOR; $i ++) {
            if (DIVISOR % $i == 0) {
                echo $i, " <br>    ";
                $primo = false;
            }
            else{
              
            }
          
           
    }
    if($primo){
echo "eres primo";
    }

    ?>
</body>

</html>