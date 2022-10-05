<?php
 
 require_once('modelo.php');

 class noticia extends modeloCredencialesDB{
    protected $titulo;
    protected $text;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function _construct(){
        parent ::_construct();
    }
    public function consultar_noticas(){

        $instruction ="CALL sp_listar_noticias()";

        $consula=$this->_db->$_query($instruction);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo"Fallo al consultar la noticia";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_dbclose();
        }
    }
    public function consultar_noticas_filtro($campo,$valor){
        $instruction="CALL sp_listar_noticias_filtro('".$campo."','".$valor."')";

        $consulta=$this->_db->$query($instruction);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
 }
 ?>