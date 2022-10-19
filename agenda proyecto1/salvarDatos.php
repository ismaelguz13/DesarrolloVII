<?php 
require_once('class/config.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No hay datos para guardar.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `agendad` (`titulo`, `descripcion`, `fecha_ini`, `fecha_fin`, `imagen`) 
    VALUES ( '$titulo', '$descripcion', '$fecha_ini', '$fecha_fin', '$imagen')";
  }else{
    $sql = "UPDATE `agendad` set `titulo` = '{$titulo}', `descripcion` = '{$descripcion}', `fecha_ini` = '{$fecha_ini}',
     `fecha_fin` = '{$fecha_fin}', `imagen` = '{$imagen}' where `id` = '{$id}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Gracias por Guardar Correctamente.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>