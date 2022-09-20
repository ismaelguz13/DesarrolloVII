<?php
include("class_lib.php");
$soportel=new soporte("The Soccer Game",22,3);
echo"<b>".$soportel->titulo."</b>";
echo "<br>Precio:".$soportel->dame_precio_sin_itbm()."dolares";

$mivideo =new video("Los Otros",22,4,5,"115 minutos");
echo"<br><br>"
echo"<b>".$mivideo->titulo ."</b>";
echo"<br>precio:".$mivideo->dame_precio_sin_itbm()."dolares";
echo"<br>precio ITBM incluido:".$mivideo->dame_precio_con_itbm()."dolares";
echo"<br>Precio:".$mivideo->imprime_caracteristicas();

$mijuego = new juego("PES 18",21,2.5,"PS 4",1,2);
$mijuego->imprime_caracteristicas();
$mijuego->imprime_jugadores_posibles();
echo"<p>";
$mijuego2 = new juego ("Fifa 22",27,3,"PS5",1,2);
echo"<b>".$mijuego2->titulo."</b>";
$mijuego2->imprime_jugadores_posibles();
?>