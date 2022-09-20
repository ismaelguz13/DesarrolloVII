<?php
 include ("class_lib.php");
 print foo:: $mi_static."value (1)<br>";

 $foo= new foo();
 print $foo->staticValor()."value (2)<br>";

 print $foo->staticValor()."value (3)<br>";
 //"propiedad" no definida mi_estatic
 //$foo:mi_static no es posible

 print Bar::$mi_static."value(4)<br>";
 $bar = new bar();
 print $bar->fooStatic()."value(5)<br>";
 ?>