<?php
$valor=$_POST['valor'];
echo"<br> DATOS CARGADOS";
echo"<br> el valor es:" .$valor. "Porcentaje<br>";
if($valor > 80){
    echo '<img src="img/alto.jpeg" width="50" height="50"/>';
}
elseif($valor >=50 && $valor <=80){
    echo '<img src="img/medio.jpeg" width="50" height="50"/>';
}
else{
    echo '<img src="img/bajo.jpeg" width="50" height="50"/>';
}
?>