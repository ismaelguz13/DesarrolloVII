<?php final ClaseBase{
    public function test(){
        echo"ClaseBase::test() llamada /n";
    }
    final public function moreTesting(){
        echo"ClaseBase::moreTesting() llamada /n";
    }
}
class ClaseHijo extends ClaseBase{
}
?>