<?php
 include ("class_lib.php");
 $temp1= new template;
 $prueba = "valor de prueba";

 $temp1->ponerVariable("var1","valor 1");
 $tenp1->ponerVariable("var2","valor 2");
 $temp1->ponerVariable("var3","valor 3");

 echo $temp1->verHtml ($prueba);
 ?>