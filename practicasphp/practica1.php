<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvendido a PHP</h1>

    <?php
      echo "Hola Mundo, PHP!";  
    //variables
    $nombre = "Raul Vera";
    $carnet = 5565896;

    //estructuras de control
    $edad = 30;
    echo "<br>";
    if($edad>25){
        echo "adulto";
    }else{
        echo "joven";
    }

    ?>
</body>
</html>