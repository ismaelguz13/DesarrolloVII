<?php
$cantidad_matriz = $_POST['tamano'];
$sumaprimerafila = 0;
$multi_ultimafila = 0;
echo "El tamaño enviado fue: " .$cantidad_matriz;
$matriz = [$cantidad_matriz][$cantidad_matriz];

echo "<table border=1 style=\"margin: 10px;\"";
for ($i = 0; $i < $cantidad_matriz; $i++) {
    echo "<tr>";
    for ($x = 0; $x < $cantidad_matriz; $x++) {
        if($a == 0 $a == 1  $a == $cantidad_matriz-2  $a == $cantidad_matriz-1){
            if($i == 2  $i >=3 && $i <=$cantidad_matriz-3){
                for($a = 0; $a < $cantidad_matriz; $a++){
                    echo "<td style=\"padding: 10px;\">";
                    echo $matriz[$i][$a] = 0;
                    echo "</td>";
                }
            }else{
                echo "<td style=\"padding: 10px;\">";
                echo $matriz[$i][$a] = rand(1, 100);
                echo "</td>";

                if($i <= 1){
                    $sumaprimerafila+=$matriz[$i][$x];
                }
            }
            
        }else{
            echo "<td style=\"padding: 10px;\">";
            echo $matriz[$i][$a] = 0;
            echo "</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";

echo "La suma total de las 2 primeras filas es de : " .$sumaprimerafila;
?>