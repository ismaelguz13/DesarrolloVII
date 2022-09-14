<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio3.3</title>
</head>
<body>
    <?php
     if(array_key_exists('enviar',$_POST)){
        if($_REQUEST['apellido']!="")
        {
            echo"El apellido Ingresado es: $_REQUEST[apellido]";
        }
        else
        {
            echo"Favor coloque el apellido";
        }
        echo"<br>";
        if($_REQUEST['nombre']!="")
        {
            echo"El apellido Ingresado es: $_REQUEST[nombre]";
        }
        else
        {
            echo"Favor coloque el nombre";
        }
     }
     else{
        <FORM ACTION="lab3.3.php" METHOD="POST">
        Nombre:<INPUT TYPE = "TEXT" NAME="Nombre"><br>
        Apellido:<INPUT TYPE = "TEXT" NAME="Apellido"><br>
        <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="Enviar Datos">
        </form>
   <?php 
     }
     ?>
</body>
</html>