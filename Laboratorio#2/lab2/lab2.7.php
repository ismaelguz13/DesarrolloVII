<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eleccion por switch</title>
</head>
<body>
    <?php
    $posicion="arriba";

    switch($posicion){
        case "arriba": //bloque 1
            echo "la variable contiene";
            echo "el valor arriba";
            break;
        case "abajo"://bloque 2
            echo "la variable contiene";
            echo "el valor abajo";
            break;
        default: //bloque 3
         echo"la variable contiene otro valor";
         echo"destino de arriba y abajo";
    }
    ?>
</body>
</html>