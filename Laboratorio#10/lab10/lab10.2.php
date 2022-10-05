<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratio10.2</title>
</head>
<body>
    <h1>Encuesta. Resultado de la votacion</h1>
<?php
require_once("class/votos.php");

$obj_votos = new votos();
$votos = $obj_votos->listar_votos();

    foreach ($result_votos as $result_voto){
       $voto1=$result_voto['voto1'];
       $voto2=$result_voto['voto2'];
}
$totalvotos=$voto1+$voto2;

print("<TABLE>\n");
    print("<TR>\n");
    print("<TH>Respuesta</TH>\n");
    print("<TH>Votos</TH>\n");
    print("<TH>Porcentaje</TH>\n");
    print("<TH>FRrepesentacion Grafica</TH>\n");
    print("<TR>\n");

    $porcentaje = round (($voto1/$totalvotos)*100,2);
    print("<tr>\n");
    print("<td CLASS='izquierda'>si</td>\n");
    print("<td CLASS='derecha'>$votos1</td>\n");
    print("<td CLASS='derecha'>$porcentaje</td>\n");
    print("<td CLASS='izquierda'width='400'><img src='img/puntoamarillo.gif' height='10' width='".$porcentaje*4."'></td>\n");
    print("<TR>\n");

    $porcentaje = round (($voto2/$totalvotos)*100,2);
    print("<tr>\n");
    print("<td CLASS='izquierda'>si</td>\n");
    print("<td CLASS='derecha'>$votos2</td>\n");
    print("<td CLASS='derecha'>$porcentaje</td>\n");
    print("<td CLASS='izquierda'width='400'><img src='img/puntoamarillo.gif' height='10' width='".$porcentaje*4."'></td>\n");
    print("<TR>\n");

    print("</TABLE>\n");
    print("<p>Numero total de votos emitidos: $totalvotos</p>\n");
    print("<p><a HREF='lab10.php'>Pagina de votacion</a></p>\n");

?>
</body>
</html>