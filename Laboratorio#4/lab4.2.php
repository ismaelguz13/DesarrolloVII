<?php
    $numero=$_POST['numero']
    function factorial ($numero){
        $factorial=1;
        $contador= 1;
        while($contador<=$numero){
            $facorial*=$contador;
            $contador++;
        }
        return $factorial;
    }
    echo "factorial". factorial($numero);
    ?>