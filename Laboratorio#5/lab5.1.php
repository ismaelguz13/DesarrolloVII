<?php
if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])){
    $nombreDirectorio="archivos/";
    $nombreArchivo= $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombreArchivo;
    if (is_file($nombreCompleto)){
        $idUnico= time();
        $nombreArchivo=$idUnico."-" .$nombreArchivo;
        echo"archivo repetido, se cambiara el nombre a $nombreArchivo<br><br>";
    }
    move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio . $nombreArchivo);
    echo "El archivo se ha subido con exito al directorio $nombreDirectorio <br>";
}
else
   echo "No se a podido subir este archivo <br>";
?>