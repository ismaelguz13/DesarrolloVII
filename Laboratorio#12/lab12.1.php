<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <title>laboratorio 12</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>paso 1: se crea la varible de sesion y se almacena</h2>
<?php
 $var="Ejemplo sesion";
 $_SESSION['var']=$var;
 print("<P>Valor de la variable de sesion: $var</p>\n");
 ?>
 <a href="lab12.2.php">paso 2</a>
</body>
</html>