<?php
require_once('modelo.php');

class usuarios extends modeloCredencialesDB{

    public function _construct(){
        parent:: _construct();
    }
}
public function validar_usuario($usr,$pwd){

    $instruccion = "call sp_validar_usuario(' " .$usr." ','" .$pwd. "')";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if($resultado){

        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}
?>