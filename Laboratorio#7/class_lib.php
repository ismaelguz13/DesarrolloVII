<?php
class MiClase{
    const constante ='valor constante';
    function mostrarconstante(){
        echo self:: ."/n";
    }
}
abstract class ClaseAbstracta{
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);

    public function printOut(){
        print $this->tomarValor()."<br>";
    }
}
class ClaseConcreta1 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta1";
    }
    public function prefixValor ($prefix){
        return "($prefix)ClaseConcreta1";
    }
}
class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta2";
    }
    public function prefixValor ($prefix){
      return "($prefix)ClaseConcreta2";
    }
}
 interface iTamplate{
    public function ponerVariable($nombre,$var)
    public function verHtml($template);
 }
 class Template implements iTemplate{
    private $vars= array();
    public function ponerVariable($nombre,$var){
        $this->$var[$nombre]= $var;
    }
    public function verHtml($template){
        foreach ($this->vars as $nombre ->$value){
            $template = str_replace('('.$nombre.')', $value , $template);
        }
        return $template;
    }
 }
 class subObject{
    static $instance =0;
    public $instance;

    public function _construct(){
        $this->instance = ++self:: $instances;
    }
    public function _clone(){
        $this->instance = ++self:: $instances;
    }
 }
 class myCloneable{
    public $object1;
    public $object2;

    function _clone(){
        $this->object1= clone $this->object1;
    }
 }
 class cilindro{
    protected $pi;
    protected $diametro;
    protected $altura;
    protected $radio;

    function _construct($d,$a){
        $this->diametro= $d;
        $this->$altura= $a;
        $this->$pi=3.141593;
        $this->$radio=$d/2;
    }
    function obtener_radio(){
        return $radio;
    }
    function calc_volumen(){
        return $this->pi*$this->radio*$this->radio*$this->altura;
    }
    function calc_area(){
        return 2*$this->pi*$this->radio*($this->radio+$this->altura);
    }
 }
?>