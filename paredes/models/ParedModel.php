<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/conexion/Conexion.php');

class ParedModel extends Conexion
{
    public function traerParedes()
    {
        $sql = "select * from paredes";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = $this->get_table_assoc($consulta);
        return $result; 
    }


    public function traerParedId($idPared)
    {
        $sql = "select * from paredes where id = '".$idPared."'   ";
        // die($sql);
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = mysql_fetch_assoc($consulta);
        return $result; 
    }
}

?>