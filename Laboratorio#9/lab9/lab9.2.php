<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratio9.1</title>
</head>
<body>
    <h1>Consulta de noticias</h1>
    <form name="FormFiltro" method="post" action="lab9.2.php">
<br/>
filtrar por:<SELECT NAME="CAMPOS">
    <OPTION VALUE="texto" SELECTED>Descripcion
    <OPTION VALUE="titulo">Titulo
    <OPTION VALUE="categoria">Categoria
</SELECT>
con el valor
<input TYPE="text" NAME="valor">
<INPUT NAME="consultarfiltro" VALUE="Filtrar Datos" TYPE="submit"/>
<INPUT NAME="conultarTodos" VALUE="ver todos" TYPE="submit"/>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticia = $obj_noticia->consultar_noticas();
if (array_key_exists('consultarTodos', $_POST)){
    $obj_noticia= new noticia();
    $noticias_new =$obj_noticia->consultar_noticias();
}
if(array_key_exists('consultarfiltro', $_POST)){
    $obj_noticia= new noticia();
    $noticias_new =$obj_noticia->consultar_noticias_filtro($_REQUEST['$campo'],$_REQUEST['valor']);
}

$nfilas=count($noticias);

if($nfilas > 0){
    print("<TABLE>\n");
    print("<TR>\n");
    print("<TH>Titulo</TH>\n");
    print("<TH>Text</TH>\n");
    print("<TH>Categoria</TH>\n");
    print("<TH>Fecha</TH>\n");
    print("<TH>Imagen</TH>\n");
    print("<TH>\n");

    foreach ($noticias as $resultado){
        print("<TR>\n");
        print("<TD>". $resultado['Titulo']."</TD>\n");
        print("<TD>". $resultado['Text']."</TD>\n");
        print("<TD>". $resultado['Categoria']."</TD>\n");
        print("<TD>". date("j/n/y",strotime($resultado['Fecha']))."</TD>\n");

        if($resultado['Imagen'] !=""){
            print("<TD><A TARGET='_blank' HREF='img/".$resultado['Imagen'].
            "'><IMG BORDER='0' SRC='img/icontexto.gif'></A></TD>\n");
        }
        else{
            print ("<TD>&nbsp;</TD>\n");
        }
        print("</TR>\n");
    }
    print("</TABLE>\n")
}
else{
    print("No hay noticias disponibles");
}
?>
</body>
</html>