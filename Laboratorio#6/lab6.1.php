<?php
 class cliente{
     var $nombre;
     var $numero;
     var $pelicula_alquiladas;

     function_contruct($nombre , $numero){
        $this->nombre=$nombre;
        $this->numero=$numero;
        $this->pelicula_alquiadas=array();
     }
     function_destruct(){
        echo"<br>destruido:" . $this->nombre;
     }
     function dame_numero(){
       return $this->numero;
     }
 }
  $cliente1 = new cliente("ismael",1);
  $cliente2 = new cliente("michael",265);

  echo"<br> El identificador de cliente 1 es: ". $cliente1->dame_numero();
  echo"<br> El identificador de cliente 2 es: ". $cliente2->dame_numero();

  ?>