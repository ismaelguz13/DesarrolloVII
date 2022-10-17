<?php
session_start();
?>
<html lang="es">
    <head>
        <title>laboratorio 12</tile>
    <link rel="stylesheet" type="text/css" href="css/esstilo.css">
</head>
<body>
    <h1>manejo de sesion</h1>
    <h2>Paso 3: la variable ya ha sido destruida y su valor se a perdido</h2>
<?php
 if(isset($_SESSION['var'])){
    $var = $_SESSION['var'];
 }else{
    $var="";
 }
 print("<p>Valor de la variable de sesion: $var</p>\n");
 session_destroy();
 ?>
 <a href="lab12.1.php">Volver al paso 1</a>
</body>
</html>