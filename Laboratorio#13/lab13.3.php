<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Recuperar el valor de una cookie</h1>
<?php

if(isset($_COOKIE["user"]))
echo"<h2>Bienvenido".$_COOKIE["user"]."!</h2><br/>";
else
echo"<h2>Bienvenido invitado!</h2><br/>";
?>
<a href="lab13.1.php">...Regresar</a>&nbsp;
<a href="lab13.4.php">Continuar...</a>
</body>
</html>