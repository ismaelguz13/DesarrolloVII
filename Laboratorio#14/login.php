<?php
    session_start();

    if(isset($_REQUEST['usuario'])) && isset($_REQUEST['clave']){
        $usuario= $_REQUEST['usuario'];
        $clave = $_REQUEST['clave'];

        $salt = substr ($usuario,0,2);
        $clave_crypt =crypt ($clave,$salt);

        require_once("class/usuario.php");

        $obj_usuarios = new usuarios();
        $usuarios_validados = $obj_usuarios->validar_usuarios($usuario,$clave_crypt);

        foreach($usuarios_validados as $array_resp){
            foreach($array_resp as $value){
                $nfilas=$value;
            }
        }
        if ($nfilas >0){
            $usuarios_validados =$usuario;
            $_SESSION["usuarios_validos"]=$usuarios_validados;
        }
    }
?>
<!DOCTYPE html public "//w3c/dtd html 4.0//en"
 "http://www.w3.org/tr/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 14-Login al sitio de noticias </title>
</head>
<body>
    <?php
    //sesion iniciada
    if(isset($_SESSION["usuarios_validos"])){
?>
    <h1>Gestion de noticias</h1>
<hr>
<ul>
<li><a href="lab14.2.php">Listar todas las noticias</a>
<li><a href="lab14.3.php">Listar noticias por partes</a>
<li><a href="lab14.4.php">Buscar noticias</a>
</ul>
<hr>
<p>[<a href='logout.php'>Desconectar</a>]</a>
<?php
}
else if(isset($usuario))
{
print("<br><br>\n");
print("<p align='center'>Acceso no autorizado</p>\n");
print("<p align='center'>[<a href='login.php'>conectar</a>]</p>\n");
//Sesion no inciada
else
{
print("<br><br>\n");
print("<p CLASS='parrafoentrado'>Esta zona tiene el acceso restringido.<br>"."Para entrar debe indentificarse</p>\n");
print("<form class='entrada' name='login' action='login.php' method='post'>\n")

print("<p><label class='etiqueta_entrada'>Usuario:</label>\n");
print("<input type='text' name='usuario' size='15'></p>\n");
print("<p><label class='etiqueta_entrada'>Clase:</label>\n");
print("input type='password' name='clave'size='15'></p>\n");
print("<p><input type='submit' value='entrar'></p>\n");
print("</form>\n");

print("<p class='parrafocentrado'NOTA: si no dispone de una identificacion o tiene problemas"."para entrar<br>pongase en contacto con el".
"<a href='Mailto:webmaster@localhost'>administrador</a>del sitio</p>\n");
}
?>
<body>
</html>