<?php

   include("class_lib.php");
   
  $cliente1 = new cliente("ismael",1);
  $cliente2 = new cliente("michael",265);

  echo"<br> El identificador de cliente 1 es: ". $cliente1->dame_numero();
  echo"<br> El identificador de cliente 2 es: ". $cliente2->dame_numero();

  ?>