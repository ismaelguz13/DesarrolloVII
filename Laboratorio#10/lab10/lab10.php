<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio10.1</title>
</head>
<body>
    <?php

    require_once("class/votos.php");

    if (array_key_exists('enviar',$_POST)){
        print("<h1>Encuesta.Voto Registrado</h1>\n");

        $obj_votos = new votos();
        $resultado_votos=$obj_votos->listar_votos();

        foreach($resultado_votos as $result_voto){
            $voto1=$result_voto['voto1'];
            $voto2=$result_voto['voto2'];
        }
        $voto = $_REQUEST['voto'];
        if($voto=="si")
        $votos1=$votos1+1;
        else if($voto == "no")
        $votos2=$votos2+1;

        $obj_votos= new votos();
        $result =$obj_votos->actualizar_votos($votos1,$votos2);

        if($result){
            print("<p>Su voto ha sido registrado.Gracias por participar</p>\n");
            print("<a HREF='lab10.2.php'>Ver Resultados</a>\n");
        }
        else{
            print("<a HREF='Lab10.php'>Error al actualizar su voto</a>\n");
        }
    }
    else{
        ?>
    <h1>Encuesta</h>

    <p>¿Cree usted que el precio de la vivienda seguira subiendo al ritmo actual?</p>

    <form action="lab10.php" method="post">
        <input type="radio" name="voto" value="si" checked>si<br>
        <input type="radio" name="voto" value="no">no<br><br>
        <input type="submit" name="enviar" value="votar">
    </form>
    <a HREF="lab10.2.php">Ver Resultados</a>
    <?php
    }
 ?>
</body>
</html>