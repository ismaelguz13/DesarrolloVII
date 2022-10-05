<?php
require_once('modelo.php');

class votos extends modeloCredencialesDB{
    public function _construct(){
        parent::_construct();
    }
    public function listar_votos(){
        $intruccion = "CALL sp_listar_votos()";

        $consulta=$this->_db->query($intruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

           if($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
           }
    }
    public function actualizar_votos($voto1,$voto2){

        $instruccion="CALL sp_actualizar_votos('".$voto1."','".$voto2."')";
        $actualizar=$this->_db->query($instruccion);

        if($actualiza){
            return $actualiza;
            $actualiza->close();
            $this->_db->close();
        }
    }
}
?>