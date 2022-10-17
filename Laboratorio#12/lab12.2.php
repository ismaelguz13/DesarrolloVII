<?php
session_start();
?>
<html lang="es">
    <head>
        <title>Laboratorio 12</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones</h1>
    <h2>Paso 2: se accede a la variable de sesion almacenada y se destruye</h2>
<?php
 if(isset($_SESSION['var'])){
    $var = $_SESSION['var'];
    print("<p>Valor de la variable de sesion: $var</p>\n");
    unset($_SESSION['var']);
    print("<a href='lab12.3.php'>Paso 3</a>");
 }
 else{
    print("Sesion no iniciada , ir al<a href='lab12.1.php'>Paso 1</a> para inciar la sesion");
 }
 ?>
 </body>
 </html>