<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre = "Daniel ";
$apellido = "Namro";
$edad = 21;
$tlf = 1234567890;
$email = "danielnamrofpb@gmail.com";


?>
  <table>
      <tr>
          <td>nombre</td>
          <td><?php print $nombre?></td>
      </tr>
      <tr>
          <td>apellido</td>
          <td><?php print $apellido?></td>
      </tr>
      <tr>
          <td>edad</td>
          <td><?php print $edad?></td>
      </tr>
      <tr>
          <td>tlf</td>
          <td><?php print $tlf?></td>
      </tr>
      <tr>
          <td>email</td>
          <td><?php print $email?></td>
      </tr>
   
  </table>
  
   
</body>
</html>