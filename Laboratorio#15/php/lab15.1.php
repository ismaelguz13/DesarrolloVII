<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratio9.1</title>
</head>
<body>
    <h1>Consulta de noticias</h1>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticia = $obj_noticia->consultar_noticas();

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