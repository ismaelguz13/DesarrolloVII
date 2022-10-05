<?php
 require_once('config.php');

 class modeloCredencialesDB{
   
    protected $_db;

public function _construct(){
    $this->_db mysqli (DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($this->_db->connect_errno{
        echo "fallo al conectar a la base de datos".$this->db->connect_errno;
        return;
    })
}
 }
 ?>