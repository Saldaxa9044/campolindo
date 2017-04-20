<?php
 
require_once "configbd.php";
 
class BaseDatos
{
    protected $conexion;
    protected $db;
 
    public function conectar()
    {
        $this->conexion = mysql_connect(HOST, USER, PASS);
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db(DBNAME, $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);
 
        return true;
 
    }
 
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysql_close($this->$conexion);
        }
 
    }
}
?>