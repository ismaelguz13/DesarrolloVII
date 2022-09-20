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
 class soporte{
   public $titulo;
   protected $numero;
   private$precio;

   function_construct($tit,$num,$precio){
       $this->titulo=$tit;
       $this->numero=$num;
       $this->precio=$precio;
   }
   public function dame_precio_sin_itbm(){
       return $this->precio;
   }
   public function dame_precio_con_tibm(){
       return $this->precio*0.07;
   }
   public function dame_numero_identificacion(){
       return $this->numero;
   }
   public function imprime_caracteristicas(){
      echo "<br>". $this->titulo;
      echo "<br>". $this->precio ."(ITBM no incluido)";
   }
}
class video extends soporte{
   protected $duracion;

   function_construct($num ,$precio,$duracion){
      parent ::_construct($tit,$num,$precio);
      $this->duracion=$duracion;
   }
   public function imprime_caracteristicas(){
      echo "<br> Pelicula en Blue-Ray: ";
      parent ::imprime_caracteristicas();
      echo"<br>Duracion:" .$this->duracion;
   }
}
class juego extends soporte{
   protected $consola;// consola de juego ej: PS5
   protected $min_num_jugadores;
   protected $max_num_jugadores;

   function_construct($tit,$num,$precio,$consola,$min_j,$max_j){
      parent::_construct($tit,$num,$precio);
      $this->consola=$consola;
      $this->min_num_jugadores=$min_j;
      $this->max_num_jugadores=$max_j;
   }
   public function imprime_caracteristicas(){
      echo"<br>Juego para:".$this->consola;
      parent::imprime_caracteristicas();
      echo"<br>".$this->imprime_jugadores_posibles();
   }
   public function imprime_jugadores_posibles(){
      if($this->min_num_jugadores == $this->max_num_jugadores){
         if($this->min_num_jugadores==1)
         echo"<br>Para un Jugador";
         else
         echo"<br>para". $this->min_num_jugadores."jugadores";
      }
      else{
         echo"<br>De".$this->min_num_jugadores."a".$this->max_num_jugadores."jugadores";
      }
   }
}
class foo{
   public static $mi_static = 'foo';
   public function staticValor(){
      return self::$mi_static;
   }
}
class bar extends foo{
public function fooStatic(){
   return parent::$mi_static;
}
}
?>