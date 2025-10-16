<?php
$ruta = dirname(dirname(dirname(__FILE__)));
require_once($ruta.'/conexion/Conexion.php');

class EstadoModel extends Conexion
{
    public function traerEstados()
    {
        $sql = "select * from estados";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = $this->get_table_assoc($consulta);
        return $result; 
    }
    public function traerEstadoId($idEstado)
    {
        $sql = "select * from estados where id = '".$idEstado."'   ";
        $consulta = mysql_query($sql,$this->connectMysql());
         $result = mysql_fetch_assoc($consulta);
        return $result; 
    }
}

?>