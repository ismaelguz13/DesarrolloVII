<?php
if(array_key_exists('enviar',$_POST)){
    $expire=time()+60*5;
    setcookie("user",$_REQUEST['visitante'],$expire);
    header("refresh:0");
}
?>
<html lang="es">
    <head>
        <title>Laboratorio 13</html>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Creacion de cookie</h1>
    <h2>La cookie "user"tendra solo 5 minutos de duracion</h2>
<?php
if(isset($_COOKIE["user"])){
    print("<br/>Hola<b>".$_COOKIE["user"]."</b> Gracias por visitar nuestro sitio web<br/>");
}else{
    ?>
    <form name="formcookie" method="post" action="lab14.2.php">
        <br/>Hola,primera ves que te vemos por nuestro sitio web ¿Como te llamas?
        <input type="text" name="visitante">
        <input name="enviar" value="Gracias por identificarte" type="submit"/><br/>
        <?php
}
?>
<br/><a href="lab13.3php">Continuar...</a>
</body>
</html>