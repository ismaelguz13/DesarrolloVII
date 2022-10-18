<?php
  session_start();
  ?>
<html lang="en">
<head>
    <title>Desconectar</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php
    if(isset($_SESSION["usuarios_validos"])){
        session_destroy();
    print("<br><br><p align='center'>conexion finalizada</p>\n");
    print("<p align='center'>[<a href='login.php'>concetar</a>]</p>\n");
    }
    else{
        print("<br><br>\n");
        print("<p align='center'>no existe una conexion activa</p>\n");
        print("<p align='center'>[<a href='login.php'>concetar</a>]</p>\n");
    }
    ?>
</body>
</html>