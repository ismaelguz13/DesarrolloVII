<html lang="es">
    <head>
        <title>laboratorio 16.1</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
<body>
    <h1>Consulta de servicio web de conversion de temperatura</h1>
    <form name="FormConv" method="post" action="lab16.1.php">
</br>
convertir desde<select name="temp">
    <option value="CtoF" selected>C a F
    <option value="FtoC"> F a C
</select> el valor
<input type="number" name="valor" step="any" required>
<input name="converti" value="convertir" type="submit"/>
</form>
<?php
$servicio="http://www.w3schools.com/xml/tempconvert.asmx?wsdl";
$parametros=array();
if(array_key_exists('convertir',$_POST)){
    $valor=$_POST['valor'];
    $temp=$_POST['temp'];

    if($temp=="CtoF"){
        $parametros['celsius']=$valor;
        $cliente = new SoapClient($servicio, $parametros);
        $resultObj= $cliente->CelsiusToFahrenheit($parametros);
        $result =$resultObj->CelsiusToFahrenheitResult;
    }
    else{
        $parametros['Fahrenheit']=$Valor;
        $cliente= new SoapClient($servicio,$parametros);
        $resultObj= $cliente->FahrenheitToCelsius($parametros);
        $result =$resultObj->FahrenheitToCelsiusResult;
    }
    print("<br>La temperatura $valor".substr($temp,0,1)."es igual a:$resultado".substr($temp,3,1));
}
?>
</body>
</html>